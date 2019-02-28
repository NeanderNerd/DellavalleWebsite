<?php

// Asset Loader

class asset_loader {
	private $db = null;
	private $settings = array();
	
	public $fail = false;
	
	public function __construct() {
		
		if(!class_exists('PDO')) {
			ob_start();
			phpinfo();
			$test = ob_get_clean();
			if(strpos($test, '--disable-pdo') !== false || strpos($test, 'PDO') === false) {
				echo ERR_PDOAL_NO_PDO;
				$fh = fopen(PATH_PREFIX . 'pdo.override', 'w');
				fwrite($fh, 'override');
				fclose($fh);
			} else {
				echo ERR_PDOAL_NOT_LOADED;
			}
			$this->fail = true;
			return false;
		}
		try {
			$this->db = new PDO('sqlite:' . PS_SQL_FILE);
		} catch(Exception $e) {
			if($e->getMessage() == "could not find driver")
				throw $e;
			$cdir = dirname(PS_SQL_FILE);
			if(!file_exists($cdir)) {
				echo ERR_AL_NO_ASSETS;
				$this->fail = true;
				return false;
			}
			$result = @chmod($cdir, 0777);
			if(!$result) {
				echo ERR_AL_CANNOT_CREATE;
				$this->fail = true;
				return false;
			}
			$this->db = new PDO('sqlite:' . PS_SQL_FILE);
		}
		$this->init();
	}
	private function init() {
		$this->db->exec("CREATE TABLE IF NOT EXISTS LocalData(doc TEXT PRIMARY KEY ON CONFLICT REPLACE, name TEXT, password TEXT, content TEXT);");
		$this->db->exec("CREATE TABLE IF NOT EXISTS Settings(key TEXT PRIMARY KEY ON CONFLICT REPLACE, value TEXT);");
		$this->db->exec("CREATE TABLE IF NOT EXISTS Users(type TEXT PRIMARY KEY ON CONFLICT REPLACE, username TEXT, password TEXT);");
		
		$result = $this->query("SELECT ROWID, * FROM Users WHERE type = 'deployer' LIMIT 1");
		if(empty($result)) {
			$this->db->exec("INSERT INTO Users VALUES(\"deployer\", \"deployer\", \"" . sha1('deployer') . "\")");
			$this->db->exec("INSERT INTO Users VALUES(\"admin\", \"admin\", \"" . sha1('admin') . "\")");
			//$this->db->exec("INSERT INTO Users VALUES(\"author\", \"author\", \"" . sha1('author') . "\")");
		}
		
	}
	public function close() {
		//$this->db->close();
	}
	public function query($statement) {
		$result = $this->db->query($statement);
		$output = array();
		foreach($result as $r)
			$output[] = $r;
		return $output;
	}
	public function escape($data) {
		return $this->db->quote($data); // This does quoting as well as escaping! woo hoo!
	}
	
	/////////////////////////////////////////
	
	public function getLocalData($doc) {
		$doc = $this->escape($doc);
		$result = $this->query("SELECT ROWID, * FROM LocalData WHERE doc = $doc LIMIT 1");
		if(count($result) == 0)
			return array();
		return $result[0];
	}
	public function setLocalData($doc, $name='', $password='', $content='') {
		
		if(empty($doc))
			return false;
		$doc = $this->escape($doc);
		$name = $this->escape($name);
		if(!empty($password)) {
			$password = sha1($password);
		}
		$password = $this->escape($password);
		$content = $this->escape($content);
		
		$this->db->exec("INSERT INTO LocalData VALUES ($doc, $name, $password, $content)");
		
	}
	
	/////////////////////////////////////////
	
	public function addKey($doc) {
		if(empty($doc))
			return false;
		if(count($this->getLocalData($doc)) == 0)
			$this->setLocalData($doc);
	}
	public function getKeys() {
		$docs = array();
		$result = $this->db->query("SELECT doc FROM LocalData");
		while($arr = $result->fetch()) {
			$docs[] = $arr['doc'];
		}
		return $docs;
	}
	public function getKeyListCount() {
		$result = $this->db->query("SELECT COUNT(*) FROM LocalData")->fetchColumn();
		return $result;
	}
	public function docExists($doc) {
		$doc = $this->escape($doc);
		$result = $this->db->query("SELECT COUNT(*) FROM LocalData WHERE doc = $doc")->fetchColumn();
		return $result > 0;
	}
	public function getKey($offset) {
		$offset = intval($offset);
		$result = $this->query("SELECT doc, ROWID FROM LocalData LIMIT 1, $offset");
		if(count($result) == 0)
			return '';
		return $result[0]['doc'];
	}
	public function renameKey($offset, $newdoc) {
		$doc = $this->getLocalData($offset);
		$doc = $this->escape($doc['doc']);
		$name = $this->escape($newdoc);
		
		$this->db->exec("UPDATE LocalData SET doc = $name WHERE doc = $doc");
		
	}
	public function deleteKey($doc) {
		$doc = $this->escape($doc);
		$this->db->exec("DELETE FROM LocalData WHERE doc = $doc");
	}
	
	/////////////////////////////////////////
	
	public function getUserByType($type) {
		$type = $this->escape($type);
		$result = $this->db->query("SELECT username FROM Users WHERE type = $type LIMIT 1");
		return $result->fetchColumn();
	}
	public function getUserType($username) {
		$username = $this->escape($username);
		$result = $this->db->query("SELECT type FROM Users WHERE username = $username LIMIT 1");
		return $result->fetchColumn();
	}
	public function getUser($username, $password) {
		$username = $this->escape($username);
		$password = $this->escape(sha1($password));
		$result = $this->db->query("SELECT username FROM Users WHERE username = $username AND password = $password LIMIT 1");
		return $result->fetchColumn();
	}
	public function tryLogin($username, $password) {
		$username = $this->escape($username);
		$password = $this->escape(sha1($password));
		$result = $this->db->query("SELECT type FROM Users WHERE username = $username AND password = $password LIMIT 1");
		return $result->fetchColumn();
	}
	public function passwordMatches($username, $password) {
		$username = $this->escape($username);
		$password = sha1($password);
		$result = $this->db->query("SELECT password FROM Users WHERE username = $username LIMIT 1");
		$pass = $result->fetchColumn();
		return $password == $pass;
	}
	public function setUser($type, $username, $password) {
		$type = $this->escape($type);
		$username = $this->escape($username);
		$password = $this->escape(sha1($password));
		$this->db->exec("INSERT INTO Users VALUES($type, $username, $password)");
	}
	
	public function dropDeployer() {
		$this->db->query('DELETE FROM Users WHERE type = "deployer"');
	}
	
	/////////////////////////////////////////
	
	public function getContent($doc) {
		$data = $this->getLocalData($doc);
		if(!isset($data['content']))
			return '';
		return $data['content'];
	}
	public function setContent($doc, $content='') {
		
		$doc = $this->escape($doc);
		$content = $this->escape($content);
		
		$this->db->exec("UPDATE LocalData SET content = $content WHERE doc = $doc");
		
	}
	public function setLocalUser($doc, $username, $password) {
		
		$doc = $this->escape($doc);
		$username = $this->escape($username);
		$password = $this->escape(sha1($password));
		
		$this->db->exec("UPDATE LocalData SET name = $username, password = $password WHERE doc = $doc");
		
	}
	
	/////////////////////////////////////////
	
	public function hasPermission($required_rights) {
		return $required_rights <= RIGHTS;
	}
	
	/////////////////////////////////////////
	
	public function getSetting($key, $setup=false) {
		if(isset($this->settings[$key]))
			return $this->settings[$key];
		elseif($setup)
			return false;
		return $this->runSettingsLoad($key);
	}
	private function runSettingsLoad($key) {
		
		$results = $this->db->query("SELECT ROWID, * FROM Settings");
		
		foreach($results as $result)
			$this->settings[$result['key']] = trim($result['value']);
		
		return $this->getSetting($key, true);
		
	}
	
	public function getBoolSetting($key) {
		$val = $this->getSetting($key);
		if($val == null)
			return true;
		return $val == 'true';
		
	}
	
	public function setSetting($key, $value) {
		
		$this->settings[$key] = $value;
		
		$key = $this->escape($key);
		$value = $this->escape($value);
		
		$this->db->exec("INSERT INTO Settings VALUES ($key, $value)");
		
	}
	
}

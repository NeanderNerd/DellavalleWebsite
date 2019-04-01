<?php

// Asset Loader

if(USE_ASSET_LOADER == "json") {
	class json_encoder {
		public function encode($data) {return json_encode($data);}
		public function decode($data) {return json_decode($data, true);}
	}
	$json = new json_encoder();
} elseif(USE_ASSET_LOADER == "json_pear") {
	require(PATH_PREFIX . 'includes/json.php');
	$json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
}
function _json_decode($data) {
	global $json;
	return $json->decode($data);
}
function _json_encode($data) {
	global $json;
	return $json->encode($data);
}

class asset_loader {
	private $data = array();
	private $settings = array();
	
	public $fail = false;
	
	public function doLoad() {
		// Save the new data
		try {
			file_put_contents(
				PS_SQL_FILE,
				"<"."?php exit;?>\n{}"
			);
		} catch (Exception $e) {
			echo ERR_JSON_PERMISSIONS;
			exit;
		}
	}
	
	public function __construct() {
		$working = false;
		
		if(!file_exists(PS_SQL_FILE)) {
			
			// Check up on the assets directory
			$cdir = dirname(PS_SQL_FILE);
			if(!file_exists($cdir)) {
				echo ERR_AL_NO_ASSETS;
				$this->fail = true;
				return false;
			}
			
			$this->doLoad();
			
			if(!file_exists(PS_SQL_FILE)) {
				
				// Just try a good old fashioned chmod for good measure
				@chmod($cdir, 0777);
				$this->doLoad();
				
				if(!file_exists(PS_SQL_FILE)) { // Can't get in?
					echo ERR_AL_CANNOT_CREATE;
					$this->fail = true;
					return false;
				}
				
			}
			
		}
		
		if(!function_exists('json_decode')) {
			echo ERR_AL_NO_JSON;
			$this->fail = true;
			return false;
		}
		
		$data = @file(PS_SQL_FILE);
		if (empty($data)){
			echo ERR_JSON_PERMISSIONS;
			exit;
		}
		array_shift($data);
		$data = implode("\n",$data);
		$this->data = _json_decode($data, true);
		
		$this->init();
	}
	private function init() {
		
		if(empty($this->data['LocalData']))
			$this->data['LocalData'] = array();
		
		if(empty($this->data['Settings']))
			$this->data['Settings'] = array();
		
		if(empty($this->data['Users']))
			$this->data['Users'] = array();
		
		if(empty($this->data['Toolbar']))
			$this->data['Toolbar'] = array(
				"page"=>array(
					"first"=>array("Save", "Print", "Undo", "Redo"),
					"second"=>array("FullScreen", "Preview", "SpellCheck", "XHTMLSource")
				),
				"edit"=>array(
					"first"=>array("Search", "RemoveFormat"),
					"second"=>array("Cut", "Copy", "Paste")
				),
				"font"=>array(
					"first"=>array("FontName", "FontSize"),
					"second"=>array("Bold", "Italic", "Underline", "Strikethrough", "ForeColor", "BackColor")
				),
				"paragraph"=>array(
					"first"=>array("Paragraph", "Indent", "Outdent"),
					"second"=>array("JustifyLeft", "JustifyCenter", "JustifyRight", "JustifyFull", "Numbering", "Bullets")
				),
				"style"=>array(
					"first"=>array("Styles", "Absolute"),
					"second"=>array("StyleAndFormatting")
				),
				"insert"=>array(
					"first"=>array("Hyperlink", "Bookmark", "Characters", "Table", "AutoTable", "Guidelines"),
					"second"=>array("Image", "YoutubeVideo", "Media", "Flash", "Line", "Characters")
				)
			);
		
		/*
		@$this->db->query("CREATE TABLE LocalData(doc TEXT PRIMARY KEY ON CONFLICT REPLACE, name TEXT, password TEXT, content TEXT);");
		@$this->db->query("CREATE TABLE Settings(key TEXT PRIMARY KEY ON CONFLICT REPLACE, value TEXT);");
		@$this->db->query("CREATE TABLE Users(type TEXT PRIMARY KEY ON CONFLICT REPLACE, username TEXT, password TEXT);");
		*/
		
		
		
		if(!$this->hasDeployer()) {
			$this->data['Users'][] = array(
				'type'=>'deployer',
				'username'=>'deployer',
				'password'=>sha1('deployer')
			);
			$this->data['Users'][] = array(
				'type'=>'admin',
				'username'=>'admin',
				'password'=>sha1('admin')
			);
			$this->close();
		}
		
	}
	public function close() {
		try {
			file_put_contents(
				PS_SQL_FILE,
				"<?php exit;?>\n" . _json_encode($this->data)
			);
		} catch (Exception $e) {
			echo ERR_JSON_PERMISSIONS;
			exit;
		}
	}
	
	/////////////////////////////////////////
	
	public function getLocalData($doc) {
		if(!isset($this->data['LocalData'][$doc]))
			return array();
		else {
			if(empty($this->data['LocalData'][$doc]["doc"])) {
				$this->data['LocalData'][$doc]["doc"] = $doc;
				$this->close();
			}
			return $this->data['LocalData'][$doc];
		}
	}
	public function setLocalData($doc, $name='', $password='', $content='') {
		
		if(empty($doc))
			return false;
		
		if(!empty($password))
			$password = sha1($password);
		
		$this->data['LocalData'][$doc] = array(
			'doc'=>$doc,
			'name'=>$name,
			'password'=>$password,
			'content'=>$content
		);
		$this->close();
	}
	
	/////////////////////////////////////////
	
	public function addKey($docname) {
		if(empty($docname))
			return false;
		$doc = $this->getLocalData($docname);
		if(empty($doc))
			$this->setLocalData($docname);
	}
	public function getKeys() {
		return array_keys($this->data['LocalData']);
	}
	public function getKeyListCount() {
		return count($this->data['LocalData']);
	}
	public function docExists($doc) {
		return isset($this->data['LocalData'][$doc]);
	}
	public function getKey($offset) {
		$keys = array_keys($this->data['LocalData']);
		return $keys[(int)$offset];
	}
	public function renameKey($offset, $name) {
		$doc = $this->getLocalData($offset);
		$docname = $doc['doc'];
		$doc['doc'] = $name;
		unset($this->data['LocalData'][$docname]);
		$this->data['LocalData'][$name] = $doc;
		$this->close();
		
	}
	public function deleteKey($doc) {
		unset($this->data['LocalData'][$doc]);
		$this->close();
	}
	
	/////////////////////////////////////////
	
	public function hasDeployer() {
		foreach($this->data['Users'] as $user)
			if($user['type'] == 'deployer')
				return true;
		return false;
	}
	public function getDeployerKey() {
		foreach($this->data['Users'] as $key=>$user)
			if($user['type'] == 'deployer')
				return $key;
		return false;
	}
	
	
	public function getUserByType($type) {
		foreach($this->data['Users'] as $user)
			if($user['type'] == $type)
				return $user['username'];
		return false;
	}
	public function getUserType($username) {
		foreach($this->data['Users'] as $user)
			if($user['username'] == $username)
				return $user['type'];
		return false;
	}
	public function getUser($username, $password) {
		$password = sha1($password);
		foreach($this->data['Users'] as $user)
			if($user['username'] == $username && $user['password'] == $password)
				return $user['username'];
		return false;
	}
	public function findAuthor($username, $password) {
		$password = $password;
		foreach($this->data['LocalData'] as $page) {
			if($page['name'] == $username && $page['password'] == $password)
				return true;
		}
		return false;
	}
	public function tryLogin($username, $password) {
		$password = sha1($password);
		foreach($this->data['Users'] as $user)
			if($user['username'] == $username && $user['password'] == $password)
				return $user['type'];
		return false;
	}
	public function passwordMatches($username, $password) {
		$password = sha1($password);
		foreach($this->data['Users'] as $user)
			if($user['username'] == $username)
				return $user['password'] == $password;
		return false;
	}
	public function updateUser($username, $newname, $password, $type="admin") {
		$newpassword = sha1($password);
		foreach($this->data["Users"] as &$user) {
			if($user["username"] == $username) {
				$user["username"] = $newname;
				$user["password"] = $newpassword;
				$this->close();
				return true;
			}
		}
		$this->newUser($newname, $password, $type);
	}
	public function newUser($username, $password, $type="") {
		$this->data['Users'][] = array(
			'type'=>$type,
			'username'=>$username,
			'password'=>sha1($password)
		);
		$this->close();
	}
	public function deleteUser($username) {
		foreach($this->data["Users"] as $key=>$user) {
			if($user["username"] == $username) {
				unset($this->data['Users'][$key]);
				break;
			}
		}
		$this->close();
	}
	
	public function dropDeployer() {
		unset($this->data['Users'][$this->getDeployerKey()]);
	}
	
	public function getAllUsers() {
		return $this->data['Users'];
	}
	
	/////////////////////////////////////////
	
	public function getContent($doc) {
		$data = $this->getLocalData($doc);
		if(!isset($data['content']))
			return false;
		return utf8_decode($data['content']);
	}
	public function setContent($doc, $content='') {
		
		$content = trim($content);
		
		if(empty($this->data['LocalData'][$doc]))
			return $this->setLocalData($doc, "", "", $content);
		
		$this->data['LocalData'][$doc]['content'] = utf8_encode($content);
		$this->close();
		
	}
	public function setLocalUser($doc, $username, $password) {
		$password = sha1($password);
		
		$this->data['LocalData'][$doc]['name'] = $username;
		$this->data['LocalData'][$doc]['password'] = $password;
		$this->close();
	}
	
	/////////////////////////////////////////
	
	public function hasPermission($required_rights) {
		return $required_rights <= RIGHTS;
	}
	
	/////////////////////////////////////////
	
	public function getSetting($key) {
		if(isset($this->data['Settings'][$key]))
			return $this->data['Settings'][$key];
	}
	public function getBoolSetting($key) {
		$val = $this->getSetting($key);
		if($val == null)
			return true;
		return $val == 'true';
		
	}
	
	public function setSetting($key, $value) {
		
		$this->data['Settings'][$key] = $value;
		$this->close();
		
	}
	
	public function getButtons($key, $order) {
		return $this->data["Toolbar"][$key][$order];
	}
	public function unusedButtons() {
		$buttons = array_flip(editor::$buttons);
		foreach($this->data["Toolbar"] as $segment)
			foreach($segment as $order)
				foreach($order as $button)
					unset($buttons[$button]);
		$buttons = array_flip($buttons);
		return $buttons;
	}
	
	public function updateButtons($id, $buttons) {
		
		if(!$this->hasPermission(4))
			die('Unauthorized.');
		
		$id = explode("_", substr($id, 3));
		
		if(!isset($this->data['Toolbar'][$id[0]]) || !isset($this->data['Toolbar'][$id[0]][$id[1]]))
			return;
		
		$buttons = explode("&", $buttons);
		$ebuttons = editor::$buttons;
		
		$this->data['Toolbar'][$id[0]][$id[1]] = array();
		
		foreach($buttons as $button) {
			$button = substr($button, 0, strpos($button, "["));
			if(!in_array($button, $ebuttons))
				continue;
			
			$this->data['Toolbar'][$id[0]][$id[1]][] = $button;
			
		}
		
		$this->close();
		
	}
	
}

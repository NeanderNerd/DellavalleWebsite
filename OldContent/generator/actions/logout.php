<?php

// Logs out the current user.

session_destroy();
redirect("default.php");
<?php
require_once 'classes/Session.php';

Session::start();
Session::destruct();

header("Location: index.php");
exit;

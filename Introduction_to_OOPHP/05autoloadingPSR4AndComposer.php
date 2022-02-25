<?php
use \php_master_course\Models\Task;
use \php_master_course\Models\User;
use \php_master_course\Storage\DatabaseTaskStorage;

require "vendor/autoload.php";

$task = new Task;
$user = new User;
$databaseTaskStorage = new DatabaseTaskStorage;
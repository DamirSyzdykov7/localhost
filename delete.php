<?php 
require "connection.php";

$database->query("DELETE FROM `users` WHERE id = ?");
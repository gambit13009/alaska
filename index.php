<?php
session_start();
$_SESSION['admin'] = 'pok';
$_GET['action'] = null;
include_once'routeur.php';

<?php
session_start();
if ($_SESSION['validado'] != "ok") { 
  header ("location:login.php");
} else {
  $validado = true;
}
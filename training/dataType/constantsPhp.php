<?php
// define() can be created inside another block scope.
define("PI", 3.14);
echo PI;

// const cannot be created inside another block scope, like inside a function or inside an if statement.
const MYCAR = "Volvo";
echo MYCAR;

// Constants are automatically global 
define("GREETING", "Welcome to W3Schools.com!");

function myTest()
{
  echo GREETING . "<br>";
}
myTest();

// Magic constants
echo __FILE__; // /workspace/training/dataType/constantsPhp.php

function debug($message)
{
  echo "[DEBUG][" . __FILE__ . ":" . __LINE__ . "] " . $message . "<br>";
}

debug("Something happened!");

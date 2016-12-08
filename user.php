<?php

session_id("session1");
session_start();
echo session_id();
$_SESSION["name"] = "1";
echo "<pre>", print_r($_SESSION, 1), "</pre>";
session_write_close();

session_id("session2");
echo session_id();
session_start();
$_SESSION["name"] = "2";
echo "<pre>", print_r($_SESSION, 1), "</pre>";
session_write_close();

?>
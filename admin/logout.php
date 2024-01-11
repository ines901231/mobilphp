<?php

session_start();
session_unset();
session_destroy();

header("Location: ../landing2/index.html");
exit;

?>
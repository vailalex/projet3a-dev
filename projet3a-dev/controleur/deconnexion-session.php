<?php

session_start();
session_destroy();

header('Location: ../vue/form-login.php');
?>
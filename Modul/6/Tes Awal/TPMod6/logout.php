<?php

session_start();
session_unset("loggedIn");
header("Location: login.php");
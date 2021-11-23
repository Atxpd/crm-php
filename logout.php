<?php
session_start();
session_unset();
session_destroy();
unset($_SESSION['user_id']);
unset($_SESSION['admin_id']);
header("Location: index.php");
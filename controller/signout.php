<?php
	session_destroy();
    setcookie('status', 'false', time()-5000, '/');
	header('location: ../view/signin.php');
?>
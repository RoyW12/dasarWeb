<?php
$input = isset($_POST['input']) ? $_POST['input'] : '';
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
?>
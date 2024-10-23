<?php
$email = $_POST['email'];
$password = $_POST['password'];

$accounts = [
    ["roywijaya893@gmail.com", 1234],
    ["bertac@gmail.com", 5678],
    ["admin@gmail.com", 4321],
    ["ressaptry@gmail.com", 9876]
];

for($i = 0;$i<count($accounts);$i++){
    for($j=0;$j<count($accounts[$i]);$j++){
        if($email == $accounts[$i][0] && $password == $accounts[$i][1]){
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['status'] = 'login';
            header("Location: home.php");
            exit();
        }
    }
}
header("Location: index.html");
exit();
?>

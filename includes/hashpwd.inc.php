<?php 

$pwdSignup = "Krossing";

$options = [
    'cost' => 12
];

$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);


$pwdLogin = "Krossing2";
password_verify($pwdLogin, $hashedPwd);

if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are not the same!";
}




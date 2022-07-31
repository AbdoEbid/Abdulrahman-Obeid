<?php
// 
session_start();
include_once '../../middleware/requestpost.php';
include_once '../../../vendor/autoload.php';
use App\http\requests\validation;
use App\database\Models\User;

$validate= new validation;
$validate->required($_POST['first-name'],'first-name')->max($_POST['first-name'],32,'first-name');
$validate->required($_POST['last-name'],'last-name')->max($_POST['last-name'],32,'last-name');
$validate->required($_POST['email'],'email')->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/',$_POST['email'],'email');
$validate->required($_POST['gender'],'gender')->in(['m','f'],$_POST['gender'],'gender');
$validate->required($_POST['password-confirm'],'password-confirm');
$validate->required($_POST['password'],'password')->confirmation($_POST['password'],$_POST['password-confirm']);
$_SESSION['errors']=$validate->geterrors();
if(!empty($validate->geterrors())){
    
header('location:../../../signup.php');
}
$ver_code=rand(1000,99999);
$user=new User;
$user->setFirst_name($_POST['first-name'])->setLast_name($_POST['last-name'])->setPhone($_POST['phone'])
->setPassword(password_hash($_POST['password'],PASSWORD_BCRYPT))->setGender($_POST['gender']);

// print_r($validate->geterrors());
//pasword
//phone
// print_r($_POST);
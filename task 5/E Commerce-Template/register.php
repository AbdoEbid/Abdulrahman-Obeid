<?php

use App\Http\Requests\Validation;

$title = "register ";
include "layouts/header.php";
include "layouts/navbar.php";
include "layouts/breadcrump.php";

$validation = new Validation;

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST) {
    [
        'name' => ['required', 'string', 'max:32'],
        'email' => ['required', 'unique:users,email', 'regex'],
        'phone' => ['required', 'unique:users,phone', 'regex'],
        'password' => ['required', 'regex', 'confirmed'],
        'password_confirm' => ['required'],
        'gender' => ['required', 'in:m,f']
    ];
    $validation->setValueName('name')->setValue($_POST['name'])->required()->string()->max(32);
    $validation->setValueName('email')->setValue($_POST['user-email'])->required()->regex("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/");
    $validation->setValueName('phone')->setValue($_POST['phone'])->required()->regex("/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/");
    $validation->setValueName('password')->setValue($_POST['password'])->required()->regex("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,32}$/", "Minimum eight and maximum 32 characters, at least one uppercase letter, one lowercase letter, one number and one special character:")->confirmed($_post['password_confirm']);
    $validation->setValueName('password confirm')->setValue($_POST['password_confirm'])->required();
    $validation->setValueName('gender')->setValue($_POST['gender'])->required()->in(['m', 'f']);
    if (empty($validation->getErrors())) {
        echo "ok";
    }
}

?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active ">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" value="<?= $_post['name'] ?? ""?>" name="name" placeholder="Username">
                                        <?= $validation->getMessage('name') ?>
                                        <input name="user-email" value="<?= $_post['email'] ?? ""?> placeholder="Email" type="email">
                                        <?= $validation->getMessage('email') ?>
                                        <input type="password" value="<?= $_post['password'] ?? ""?> name="password" placeholder="Password">
                                        <?= $validation->getMessage('password') ?>
                                        <input type="password" value="<?= $_post['password_confirm'] ?? ""?> name="password_confirm" placeholder="Password Confirmation">
                                        <?= $validation->getMessage('password confirm') ?>
                                        <input name="phone"value="<?= $_post['phone'] ?? ""?> placeholder="Phone" type="number">
                                        <?= $validation->getMessage('phone') ?>
                                        <select name="gender"value=" class="form-control" id="">
                                            <option <?= isset($_post['gender']) && $_post['gender'] == 'm' ? 'selected' : ""?> value="m">male</option>
                                            <option <?= isset($_post['gender']) && $_post['gender'] == 'f' ? 'selected' : ""?>value="f">female</option>
                                        </select>
                                        <?= $validation->getMessage('gender') ?>
                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</html>

<?php
include "layouts/footer.php";
include "layouts/scripts.php";
?>
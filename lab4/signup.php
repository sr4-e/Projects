<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $errors = [];

    // التحقق من البيانات
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !str_ends_with($email, '@gmail.com')) {
        $errors[] = "البريد الإلكتروني يجب أن يكون @gmail.com.";
    }
    if (strlen($password) < 6) {
        $errors[] = "كلمة المرور يجب أن تكون 6 أحرف على الأقل.";
    }
    if ($password !== $confirm_password) {
        $errors[] = "كلمتا المرور غير متطابقتين.";
    }
    if (!preg_match("/^(77|73|78)\d{7}$/", $phone)) {
        $errors[] = "رقم الهاتف يجب أن يبدأ بـ 77 أو 73 أو 78 ويتكون من 9 أرقام.";
    }
    if (!in_array($gender, ['male', 'female'])) {
        $errors[] = "الجنس غير صالح.";
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (name, email, password, phone, gender) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $hashed_password, $phone, $gender]);
        
        // التأكد من نجاح الاستعلام قبل إعادة التوجيه
        if ($stmt->rowCount() > 0) {
            session_start();
            $_SESSION['user_name'] = $name; // تخزين اسم المستخدم في الجلسة
            header("Location: project.php");
            exit;
        } else {
            $errors[] = "فشل في تسجيل المستخدم. حاول مرة أخرى.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Sign up</title>
</head>
<body>
    <div class="container">
        <h1>Sign up</h1>
        
<div class="login">
         <img src="assets/img/dubai.png" alt="login image" class="login__img">

         <form method="POST" action="" class="login__form">

            <h1 class="login__title">Sign up</h1>
            <?php if (!empty($errors)) { ?>
            <div class="errors">
                <?php foreach ($errors as $error) echo "<p>$error</p>"; ?>
            </div>
        <?php } ?>
            <div class="login__content">
               <div class="login__box">
               <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="text" name="name" required class="login__input" id="login-email" placeholder=" ">
                     <label for="login-email" class="login__label">Name</label>
                  </div>
               </div>

            <div class="login__content">
                <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="email" name="email" required class="login__input" id="login-email" placeholder=" ">
                     <label for="login-email" class="login__label">Email</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" name="password" required class="login__input" id="login-pass" placeholder=" ">
                     <label for="login-pass" class="login__label">Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>


               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" name="confirm_password" required class="login__input" id="login-pass" placeholder=" ">
                     <label for="login-pass" class="login__label">Confirm Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
               

               <div class="login__box">
               
                  <div class="gender-label">Gender</div></br>
                  <label>
                     <input type="radio" name="gender" value="male" required> Male
                  </label>
                  <label>
                     <input type="radio" name="gender" value="female" required> Female
                  </label>

               </div>


               <div class="login__box">
               <i class="ri-phone-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="text" name="phone" required class="login__input" id="login-pass" placeholder=" ">
                     <label for="login-pass" class="login__label">Phone</label>
                  </div>
               </div>
            </div>

        
            <button type="submit" class="login__button">Sign up</button>

            <p class="login__register">
               Don't have an account? <a href="signin.php">Sign in</a>
            </p>
         </form>
      </div>     
    </div>

</body>
</html>

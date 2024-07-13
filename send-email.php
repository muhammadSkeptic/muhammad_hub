<?php

// اطلاعات فرم را دریافت کنید
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// یک ایمیل جدید ایجاد کنید
$to = "muhammadesteghamat16@gmail.com"; // ایمیل شما
$subject = "پیام از وب سایت شما"; // موضوع ایمیل
$body = "از: $name ($email)\n\n$message"; // متن ایمیل

// تابع ایمیل PHP را برای ارسال ایمیل استفاده کنید
mail($to, $subject, $body);

// تأیید ارسال ایمیل را به کاربر نشان دهید
echo "پیام شما با موفقیت ارسال شد!";

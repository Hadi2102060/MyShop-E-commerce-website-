<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ফর্ম থেকে ডাটা নেওয়া
    $full_name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $terms = isset($_POST['terms']) ? 1 : 0;

    // বৈধতা যাচাই
    if ($password !== $confirm_password) {
        header("Location: signup.php?error=পাসওয়ার্ড মিলছে না");
        exit();
    }

    if ($terms != 1) {
        header("Location: signup.php?error=টার্মস এবং কন্ডিশন গ্রহণ করতে হবে");
        exit();
    }

    // ইমেইল চেক করা
    $check_email = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($result) > 0) {
        header("Location: signup.php?error=ইমেইলটি ইতিমধ্যে ব্যবহৃত হয়েছে");
        exit();
    }

    // পাসওয়ার্ড হ্যাশ করা
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ডাটাবেসে ঢোকানো
    $sql = "INSERT INTO users (full_name, email, password, terms_accepted) 
            VALUES ('$full_name', '$email', '$hashed_password', '$terms')";

    if (mysqli_query($conn, $sql)) {
        header("Location: signup.php?message=সাইনআপ সফল! অ্যাকাউন্ট তৈরি হয়েছে");
    } else {
        header("Location: signup.php?error=ত্রুটি: " . mysqli_error($conn));
    }

    // সংযোগ বন্ধ
    mysqli_close($conn);
}
?>
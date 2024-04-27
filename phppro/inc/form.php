<?php


$firstnm = $_POST['firstnm'];
$lastnm = $_POST['lastnm'];
$email  = $_POST['email'];


$errors = [
    'FirstNameError'=> '',
    'LastNameError'=> '',
    'EmailError'=> '',
    
];

if (isset($_POST['submit'])) {
 
 
     
 
 
 
   

//تحقق من الاسم الاول
if(empty($firstnm)){
    $errors['FirstNameError'] = 'يرجى ادخال الاسم الاول';
//تحقق من اسم العائلة
}if (empty($lastnm)){
    $errors['LastNameError'] = 'يرجى ادخال اسم العائلة';
//تحقق من البريد الالكتروني
}if (empty($email)){

    $errors['EmailError'] = 'يرجى ادخال البريد الالكتروني';

}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

$errors['EmailError'] = 'يرجى ادخال بريد الكتروني صحيح';


}
//تحقق من عدم وجود اخطاء
if (!array_filter($errors)) {

    $firstnm = mysqli_real_escape_string($conn , $_POST ['firstnm']); 
    $lastnm = mysqli_real_escape_string($conn , $_POST ['lastnm']);
    $email  = mysqli_real_escape_string($conn , $_POST ['email']);
     
        
    $sql = "INSERT INTO user(firstnm, lastnm, email )
    VALUES ('$firstnm' , '$lastnm' , '$email')";

    if (mysqli_query($conn, $sql)) { 
    header('Location: ' . $_SERVER['PHP_SELF']);
    }else{
    echo 'not working: ' . mysqli_error($conn);
    }

}


}
<?php

/* 
 * Author: Tuan ThaiManh
 */

$firstname = $lastname = $username = $password = $email = '';
$firstNameMess = $lastNameMess = $usernameMess = $passwordMess = $emailMess = '';
$mess = '';
if(isset($_POST['submitted'])){
    require 'site/model/validateInput.php'; 
    
    //Lay gia tri input
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    //Xac thuc input
    $firstNameMess = check_firstname_input($firstname);
    $lastNameMess = check_lastname_input($lastname);
    $usernameMess = check_username_input($username);
    $passwordMess = check_password_input($password);
    $emailMess = check_email_input($email);
    
    //Neu khong loi thi nhay toi trang Success
    if($firstNameMess == 'Hợp lệ' && $lastNameMess == 'Hợp lệ' && $usernameMess == 'Hợp lệ'
    && $passwordMess == 'Hợp lệ' && $emailMess == 'Hợp lệ'){
        require SYSPATH.('database.php');
        $user_type = 3;
        
        
        $con=mysqli_connect("localhost","root","","public_service");
        if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $sql = "insert into users(Firstname, Lastname, Username, Password, User_type, Email) "
                . "values ('$firstname', '$lastname', '$username','$password','$user_type','$email')";
        
        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }
        $mess = 'Tạo tài khoản thành công';
        
        mysqli_close($con);
        header("Location: http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])
           ."/index.php?action=admin/success");
        exit();
    }   
}
?>
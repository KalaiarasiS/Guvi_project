<?php
// Include the configuration file with the database connection details
$conn = mysqli_connect('localhost','root','','user_db');

// Check if the form was submitted
if(isset($_POST['submit'])){

   // Sanitize the user input data
   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   //$user_type = $_POST['user_type'];

   // Check if user already exists
   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'User already exists!';
   }else{
         $stmt = mysqli_prepare($conn, "INSERT INTO user_form (firstname,lastname, email, password) VALUES (?, ?, ?, ?)");
         mysqli_stmt_bind_param( $stmt,'ssss', $firstname,$lastname, $email, $pass);
         if (mysqli_stmt_execute($stmt)) {
             echo "User registered successfully!";
             header('Location: http://localhost/guvi_project/login.html');
             exit();
      }else{
         echo "Error: " . mysqli_error($conn);
      }
   }
};
?>

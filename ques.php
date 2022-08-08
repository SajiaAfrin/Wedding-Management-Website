<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $question = $_POST['question'];
      

      $request = " insert into ques(name, email, phone, question) values('$name','$email','$phone','$question') ";
      mysqli_query($connection, $request);

      header('location:faq.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>
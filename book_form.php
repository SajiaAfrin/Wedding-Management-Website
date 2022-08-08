<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $subject = $_POST['subject'];
      $guests = $_POST['guests'];
      $date = $_POST['date'];
      $time = $_POST['time'];

      $request = " insert into book(name, email, phone, address, location, subject, guests, date, time) values('$name','$email','$phone','$address','$location','$subject','$guests','$date','$time') ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>
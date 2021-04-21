<?php

include '../shared/nav.php';
include '../generalphp/function.php';
include '../generalphp/configDatabase.php';

if(isset($_POST['send'])){
   $name= $_POST['name'];

   $insert= "INSERT INTO `department` VALUES (Null,'$name')";
   $i = mysqli_query ($conn, $insert);

   testmessage($i, "insert to Database");
}

?>


<div class="container col-6 my-5 text-center">

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Department Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" >
  </div>

  <button type="submit"  name="send" class="btn btn-primary">Send Data</button>
</form>

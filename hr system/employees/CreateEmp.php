<?php

include '../shared/nav.php';
include '../generalphp/function.php';
include '../generalphp/configDatabase.php';



if(isset($_POST['send'])){
   $name= $_POST['name'];
   $salary= $_POST['salary'];
   $depid= $_POST['depid'];


   $insert= "INSERT INTO `employees` VALUES (Null,'$name', $salary, $depid)";
   $i = mysqli_query ($conn, $insert);

   testmessage($i, "insert to Database");
}

$name= '';
$salary='';
$update= false;
if (isset($_GET['edit'])){
    $update= true;
    $Empid=$_GET['edit'];
    $select= " SELECT * FROM `employees` WHERE id = $Empid ";
    $s =mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc ($s);
    $name = $row ['name'];
    $salary = $row ['salary'];


if (isset($_POST['update'])){
    $name= $_POST['name'];
    $salary= $_POST ['salary'];
    $depid = $_POST ['depid'];
    $update= "UPDATE `employees` SET  name='$name', salary= '$salary' , depid= $depid  WHERE id= $Empid  ";
    $s= mysqli_query($conn, $update);

    testmessage($s, "update Id to Database");

      
    }







}




?>


<div class="container col-6 my-5 text-center">

<form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" value="<?php echo $name ?>" class="form-control" placeholder="Name" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Salary</label>
    <input type="text" name="salary"  value="<?php echo $salary ?>" class="form-control" placeholder="Salary"  >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Department Id</label>
    <select name="depid" class="form-control" >

    <?php
    $select= "SELECT * FROM `department`";
    $s= mysqli_query ($conn, $select);
    
    foreach ($s as $data){
        ?>
        <option value="<?php echo $data['id']?>" > <?php echo $data['name']?> </option>

    <?php } ?>
    </select>
  </div>

  <button type="submit"  name="update" class="btn btn-info">Update Data</button>
  <button type="submit"  name="send" class="btn btn-primary">Send Data</button>
</form>

<div class="card"  style="margin-top: 0px;  ;
    bottom: 0px; width:100%" >
  <h6 class="card-header">About</h6>
  <div class="card-body">
    <h5 class="card-title">For more information</h5>
    
    <footer >
<div></div>
  <p>Author: Ahmed zaky</p>

</footer>
    <a href="https://minecraftteam140@gmail.com" class="btn btn-primary"> Email: minecraftteam140@gmail.com</a>
    <p style="margin-top: 0px;" class="text-center">@Copyrights Allrights Reserved</p>
  </div>
</div>
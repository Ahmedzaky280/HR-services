<?php

include '../shared/nav.php';
include '../generalphp/function.php';
include '../generalphp/configDatabase.php';


$select= "SELECT * FROM `employees`";
$s= mysqli_query ($conn, $select);

if (isset($_GET['delete'])){
    $EmpId = $_GET['delete'];
    $delete = "DELETE FROM `employees` WHERE id= $EmpId";
    $d= mysqli_query($conn, $delete);
    header('location:/hr system/employees/listEmp.php');

}


?>





<div class="container col-7 text-center my-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Department ID</th>
            <th>Action</th>
        </tr>
        <?php 
        foreach($s as $data) { ?>
        <tr>
            <td> <?php echo $data ['id'] ?></td>
            <td> <?php echo $data ['name']?></td>
            <td> <?php echo $data ['salary']?></td>
            <td> <?php echo $data ['depid']?></td>
            <td> 
            <a href="createEmp.php?edit=<?php echo $data ['id'] ?>" class="btn btn-primary">update</a>

            <a href="listEmp.php?delete=<?php echo $data ['id'] ?> "
            onclick= "return confirm('Are you sure you want to perform this action ?')"
              class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

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
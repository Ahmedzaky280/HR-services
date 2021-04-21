<?php

include '../shared/nav.php';
include '../generalphp/function.php';
include '../generalphp/configDatabase.php';


$select= "SELECT employees.name empName, department.name depName FROM `employees` JOIN department ON 
employees.depid = department.id";
$s= mysqli_query ($conn, $select);
?>





<div class="container col-7 text-center my-5">
    <table class="table table-dark">
        <tr>
        
            <th> Employee name</th>
            <th>Department </th>
        </tr>
        <?php 
        foreach($s as $data) { ?>
        <tr>
            <td> <?php echo $data ['empName']?></td>
            <td> <?php echo $data ['depName']?></td>
        </tr>
        <?php } ?>
    </table>
</div>



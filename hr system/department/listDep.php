<?php

include '../shared/nav.php';
include '../generalphp/function.php';
include '../generalphp/configDatabase.php';


$select= "SELECT * FROM `department`";
$s= mysqli_query ($conn, $select);
?>





<div class="container col-7 text-center my-5">
    <table class="table table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>

        </tr>
        <?php 
        foreach($s as $data) { ?>
        <tr>
            <td> <?php echo $data ['id'] ?></td>
            <td> <?php echo $data ['name']?></td>

        </tr>
        <?php } ?>
    </table>
</div>
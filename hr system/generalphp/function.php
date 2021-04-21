<?php
function testmessage ($condition , $mess){ 
    if($condition){
        echo "<div class='alert alert-info'>
        <h2 class= 'text-center'> $mess Sucessfull </h2>
        </div>";
    }
    else{
        echo "<div class='alert alert-danger'>
       <h2 class= 'text-center'> $mess a Failure </h2>
        </div>";
    }

}
?>
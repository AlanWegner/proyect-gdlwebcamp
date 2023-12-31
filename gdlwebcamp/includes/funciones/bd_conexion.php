<?php  
     $conn = new mysqli('localhost', 'id21735291_user_gdlwebcamp', 'AJWM-FullStackDevelloper1619', 'id21735291_db_gdlwebcamp');
     
     if($conn->connect_error) {
        echo $error -> $conn->connect_error;
     }
?>
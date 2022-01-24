<?php
        $con = mysqli_connect("localhost", "root", "", "shopNow");

        $id = $_GET['delete'];    
        $sql = "DELETE FROM produit WHERE id = '{$id}'";
        $result = mysqli_query($con,$sql);

            if($result){
                echo 'h';
                header("location: ./dashboard.php");
            }else {
                echo 'failed';
            }
        

?>
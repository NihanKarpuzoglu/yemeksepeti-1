<?php
                       include "config.php";
                       $result = mysqli_connect($servername,$username,$password) or die("Could not connect to database." .mysqli_error());
                       mysqli_select_db($result,$dbname) or die("Could not select the database." .mysqli_error());

                       $item = $_POST['menu_id']; 
                        echo $item;
                       
                       
                     
?>
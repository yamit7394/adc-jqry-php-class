<?php
    namespace App;
	session_start();
    class Total{
        function totalValueincart(){
            $total = 0;
            foreach($_SESSION['cart'] as $key=> $value){
                $total += $value['price'] * $value['quantity'];
            }
            echo $total;
        }
    }
?>
<?php
    namespace App;
	session_start();
    class RemoveProduct{
        function remove($removeId){
            foreach($_SESSION['cart'] as $key => $value){
                if($removeId == $value['id']){
                    array_splice($_SESSION['cart'],$key,1);
                    break;
                }
            }
            echo json_encode(array('data'=>$_SESSION['cart']));
        }
    }
?>
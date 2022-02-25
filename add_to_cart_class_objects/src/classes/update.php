<?php
    namespace App;
	session_start();
    class Update{
        function updateCart($updateId,$qty){
            $casrtSession=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
            foreach($casrtSession as $key => $value){
                if($updateId == $value['id']){
                    $casrtSession[$key]['quantity']=$qty;
                    $_SESSION['cart']=$casrtSession;
                    break;
                }
            }
            echo json_encode(array('data'=>$_SESSION['cart']));
        }
    }
?>
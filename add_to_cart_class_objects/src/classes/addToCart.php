<?php
    namespace App;
    session_start();
    isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    class adToCart{
        function addProductTosession($prId){
            $casrtSession=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
            foreach($_SESSION['product'] as $value){
                if($prId == $value['id'] && !$this->checkProductInSession($prId)){
                    $value['quantity']=1;
                    array_push($casrtSession,$value);
                    $_SESSION['cart']=$casrtSession;
                    break;
                }
            }
            echo json_encode(array('data'=>$_SESSION['cart']));
        }
        
        //function to check if product is already in the cart
        function checkProductInSession($prId){
            $casrtSession=isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
            foreach($casrtSession as $key => $value){
                if($prId==$value['id']){
                    return true;
                    break;
                }
            }
            return false;
        }
    }
?>
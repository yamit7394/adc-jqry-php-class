<?php
    namespace App;
	session_start();
    require_once 'configure.php';
	require_once 'classes/products_class.php';
    require_once 'classes/display.php';
    require_once 'classes/remove.php';
    require_once 'classes/total.php';
    require_once 'classes/update.php';
    require_once 'classes/addToCart.php';
    isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    //print_r($_SESSION['cart']);
    if(isset($_REQUEST['action'])){
        $action=$_REQUEST['action'];
        $prId=$_REQUEST['prId'];
        //print_r($prId);
        $removeId=$_REQUEST['removeId'];
        $updateId=$_REQUEST['updateId'];
        $newQty=$_REQUEST['newQty'];
        $adCart=new adToCart();
        $rem=new RemoveProduct();
        $up=new Update();
        $tot=new Total();
        switch($action){
            case "add":
                $adCart->addProductTosession($prId);
                break;
            case "remove":
                if(isset($removeId)){$rem->remove($removeId);};
                break;
            case "update":
                if(isset($updateId)){$up->updateCart($updateId,$newQty);};
                break;
                case "total":
                    $tot->totalValueincart();
                    break;
        }
    }
    
    // //clear cart
    // if($_GET['reset']=='reset'){
    //     session_unset();
    // }
?>
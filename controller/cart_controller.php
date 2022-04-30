<?php

session_start();

require_once("../model/cart_model.php");

class CartController extends Cart
{
    public function addNewItem($sessionId, $stockId)
    {
        $result = $this->setNewItem($sessionId, $stockId);
        return $result;
    }

    public function retrieveItem_FromCart($sessionId, $stockId)
    {
        $result = $this->getItem_FromCart($sessionId, $stockId);
        return $result;
    }


    public function removeItem_FromCart($sessionId, $stockId)
    {
        $result = $this->deleteItem_FromCart($sessionId, $stockId);
        return $result;
    }
}

$cartCont_obj = new CartController($conn);

///////////////////////////////////////// Switch Status /////////////////////////
$request = isset($_REQUEST["type"]) ? $_REQUEST["type"] : "";

switch ($request) {

    case 'addItem':

        $sessionId = session_id();
        $stockId = $_POST["stockId"];

        $checkCart = $cartCont_obj->retrieveItem_FromCart($sessionId, $stockId);

        if ($checkCart->num_rows > 0) {
        } else {
            $result = $cartCont_obj->addNewItem($sessionId, $stockId);
        }


        break;

    case 'removeItem':

        $sessionId = session_id();
        $stockId = $_POST["itemId"];

        $cartCont_obj->removeItem_FromCart($sessionId, $stockId);

        break;
}

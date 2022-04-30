<?php

require_once("../common/dbConnection.php");

class Download
{
    private $conn;
    private $table = "download";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    protected function getlink_ByProductId($productId)
    {
        $sql = "SELECT * FROM $this->table down, order_has_product ohp WHERE " .
            "down.product_productId = ohp.product_productId AND down.product_productId = $productId ";

        $result = $this->conn->query($sql);
        return $result;
    }

    //////////////////////////////// Public ////////////////////////////
    public function givelink_ByProductId($productId)
    {
        $result = $this->getlink_ByProductId($productId);
        return $result;
    }
}

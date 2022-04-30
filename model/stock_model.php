<?php
require_once("../common/dbConnection.php");

class Stock
{
    private $conn;
    private $table = "stocks";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    protected function getStockInfo_ByProductId($productId)
    {
        $sql = "SELECT * FROM $this->table WHERE product_productId = $productId";
        $result = $this->conn->query($sql);
        return $result;
    }

    protected function getStockInfo_ByProductSizeId($productId)
    {
        $sql = "SELECT * FROM $this->table WHERE product_productId = $productId";
        $result = $this->conn->query($sql);
        return $result;
    }

    protected function getStockInfo_ByStockId($stockId)
    {
        $sql = "SELECT * FROM $this->table WHERE stock_id = $stockId";
        $result = $this->conn->query($sql);
        return $result;
    }

    // protected function deleteStockItem_ByStockId($stockId, $qty)
    // {
    //     $sql = "UPDATE stocks SET stock_count = stock_count - $qty WHERE stock_id = $stockId";
    //     $result = $this->conn->query($sql);
    //     return $result;
    // }

    ///////////////////////// Public ////////////////////////////
    public function giveStockInfo_ByProductId($productId)
    {
        $result = $this->getStockInfo_ByProductId($productId);
        return $result;
    }

    // public function updateStockItem_ByStockId($stockId, $qty)
    // {
    //     $result = $this->deleteStockItem_ByStockId($stockId, $qty);
    //     return $result;
    // }
}

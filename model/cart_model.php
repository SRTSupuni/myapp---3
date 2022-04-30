<?php

require_once("../common/dbConnection.php");

class Cart
{
    private $conn;
    private $table = "cart";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    protected function setNewItem($sessionId, $stockId)
    {
        $sql = "INSERT INTO $this->table(sess_id, stock_stockId) VALUES('$sessionId', $stockId)";
        $result = $this->conn->query($sql);
        return $result;
    }

    protected function getItem_FromCart($sessionId, $stockId)
    {
        $sql = "SELECT * FROM $this->table WHERE sess_id = '$sessionId' AND stock_stockId = $stockId";
        $result = $this->conn->query($sql);
        return $result;
    }

    protected function deleteItem_FromCart($sessionId, $stockId)
    {
        $sql = "DELETE FROM $this->table WHERE sess_id = '$sessionId' AND stock_stockId = $stockId";
        $result = $this->conn->query($sql);
        return $result;
    }

    protected function deleteCart($sessionId)
    {
        $sql = "DELETE FROM $this->table WHERE sess_id = '$sessionId'";
        $result = $this->conn->query($sql);
        return $result;
    }

    //////////////////////////// Public Access //////////////////
    public function removeCart($sessionId)
    {
        $result = $this->deleteCart($sessionId);
        return $result;
    }
}

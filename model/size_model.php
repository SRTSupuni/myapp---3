<?php
require_once("../common/dbConnection.php");

class Size
{
    private $conn;
    private $table = "sizes";

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    protected function getSize_BySizeId($sizeId)
    {
        $sql = "SELECT * FROM $this->table WHERE size_id = $sizeId";
        $result = $this->conn->query($sql);
        return $result;
    }

    protected function getSizes_ByProductId($productId)
    {
        $sql = "SELECT * FROM $this->table s, product_has_size ps WHERE " .
            "s.size_id = ps.size_sizeId AND ps.product_productId = $productId";

        $result = $this->conn->query($sql);
        return $result;
    }

    /////////////////////////// Public ///////////////////////
    public function giveSize_BySizeId($sizeId)
    {
        $result = $this->getSize_BySizeId($sizeId);
        return $result;
    }

    function giveSizes_ByProductId($productId)
    {
        $result = $this->getSizes_ByProductId($productId);
        return $result;
    }
}

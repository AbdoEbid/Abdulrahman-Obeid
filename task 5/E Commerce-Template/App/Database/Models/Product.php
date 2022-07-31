<?php
namespace App\Database\Models;

use APP\Database\Ccontracts\crud;
use App\Database\config\connection;
class product extends connection implements crud{
    private $id,$name_en,$name_ar,$quantity,$desc_en,$desc_ar,$codes,$prices,$status,$image,$created_AT,$update_AT,
    $id_brand;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_en
     */ 
    public function getName_en()
    {
        return $this->name_en;
    }

    /**
     * Set the value of name_en
     *
     * @return  self
     */ 
    public function setName_en($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * Get the value of name_ar
     */ 
    public function getName_ar()
    {
        return $this->name_ar;
    }

    /**
     * Set the value of name_ar
     *
     * @return  self
     */ 
    public function setName_ar($name_ar)
    {
        $this->name_ar = $name_ar;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of desc_en
     */ 
    public function getDesc_en()
    {
        return $this->desc_en;
    }

    /**
     * Set the value of desc_en
     *
     * @return  self
     */ 
    public function setDesc_en($desc_en)
    {
        $this->desc_en = $desc_en;

        return $this;
    }

    /**
     * Get the value of desc_ar
     */ 
    public function getDesc_ar()
    {
        return $this->desc_ar;
    }

    /**
     * Set the value of desc_ar
     *
     * @return  self
     */ 
    public function setDesc_ar($desc_ar)
    {
        $this->desc_ar = $desc_ar;

        return $this;
    }

    /**
     * Get the value of codes
     */ 
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * Set the value of codes
     *
     * @return  self
     */ 
    public function setCodes($codes)
    {
        $this->codes = $codes;

        return $this;
    }

    /**
     * Get the value of prices
     */ 
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Set the value of prices
     *
     * @return  self
     */ 
    public function setPrices($prices)
    {
        $this->prices = $prices;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of created_AT
     */ 
    public function getCreated_AT()
    {
        return $this->created_AT;
    }

    /**
     * Set the value of created_AT
     *
     * @return  self
     */ 
    public function setCreated_AT($created_AT)
    {
        $this->created_AT = $created_AT;

        return $this;
    }

    /**
     * Get the value of update_AT
     */ 
    public function getUpdate_AT()
    {
        return $this->update_AT;
    }

    /**
     * Set the value of update_AT
     *
     * @return  self
     */ 
    public function setUpdate_AT($update_AT)
    {
        $this->update_AT = $update_AT;

        return $this;
    }

    /**
     * Get the value of id_brand
     */ 
    public function getId_brand()
    {
        return $this->id_brand;
    }

    /**
     * Set the value of id_brand
     *
     * @return  self
     */ 
    public function setId_brand($id_brand)
    {
        $this->id_brand = $id_brand;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function create(){

    }
    public function read(){
    }
    
    public function update(){

    }
    public function delete(){
        
    }
}

?>
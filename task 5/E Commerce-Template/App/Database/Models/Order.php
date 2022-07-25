<?php

namespace App\Database\Models;

use App\Database\Models\Contracts\Crud;
use App\Database\Models\Model;

class Order extends Model implements Crud
{
    private $id, $order_number, $status, $total_price, $delivered_at, $payment_method, $address_id, $coupon_id, $created_at, $updated_a;

    private const table = "orders";
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
     * Get the value of order_number
     */
    public function getOrder_number()
    {
        return $this->order_number;
    }

    /**
     * Set the value of order_number
     *
     * @return  self
     */
    public function setOrder_number($order_number)
    {
        $this->order_number = $order_number;

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
     * Get the value of total_price
     */
    public function getTotal_price()
    {
        return $this->total_price;
    }

    /**
     * Set the value of total_price
     *
     * @return  self
     */
    public function setTotal_price($total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * Get the value of delivered_at
     */
    public function getDelivered_at()
    {
        return $this->delivered_at;
    }

    /**
     * Set the value of delivered_at
     *
     * @return  self
     */
    public function setDelivered_at($delivered_at)
    {
        $this->delivered_at = $delivered_at;

        return $this;
    }

    /**
     * Get the value of payment_method
     */
    public function getPayment_method()
    {
        return $this->payment_method;
    }

    /**
     * Set the value of payment_method
     *
     * @return  self
     */
    public function setPayment_method($payment_method)
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    /**
     * Get the value of address_id
     */
    public function getAddress_id()
    {
        return $this->address_id;
    }

    /**
     * Set the value of address_id
     *
     * @return  self
     */
    public function setAddress_id($address_id)
    {
        $this->address_id = $address_id;

        return $this;
    }

    /**
     * Get the value of coupon_id
     */
    public function getCoupon_id()
    {
        return $this->coupon_id;
    }

    /**
     * Set the value of coupon_id
     *
     * @return  self
     */
    public function setCoupon_id($coupon_id)
    {
        $this->coupon_id = $coupon_id;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
    public function create()
    {
        # code...
    }
    public function read()
    {
        # code...
    }
    public function update()
    {
        # code...
    }
    public function delete()
    {
        # code...
    }
}

<?php
namespace App\Database\Models;

use APP\Database\Ccontracts\crud;
use App\Database\config\connection;

class User extends connection implements crud {
private $id,$first_name,$last_name,$password,$gender,$status,$phone,$ver_code,$email_ver_At,$created_AT,$update_AT,
$id_prod;

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
 * Get the value of first_name
 */ 
public function getFirst_name()
{
return $this->first_name;
}

/**
 * Set the value of first_name
 *
 * @return  self
 */ 
public function setFirst_name($first_name)
{
$this->first_name = $first_name;

return $this;
}

/**
 * Get the value of last_name
 */ 
public function getLast_name()
{
return $this->last_name;
}

/**
 * Set the value of last_name
 *
 * @return  self
 */ 
public function setLast_name($last_name)
{
$this->last_name = $last_name;

return $this;
}

/**
 * Get the value of password
 */ 
public function getPassword()
{
return $this->password;
}

/**
 * Set the value of password
 *
 * @return  self
 */ 
public function setPassword($password)
{
$this->password = $password;

return $this;
}

/**
 * Get the value of gender
 */ 
public function getGender()
{
return $this->gender;
}

/**
 * Set the value of gender
 *
 * @return  self
 */ 
public function setGender($gender)
{
$this->gender = $gender;

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
 * Get the value of ver_code
 */ 
public function getVer_code()
{
return $this->ver_code;
}

/**
 * Set the value of ver_code
 *
 * @return  self
 */ 
public function setVer_code($ver_code)
{
$this->ver_code = $ver_code;

return $this;
}

/**
 * Get the value of email_ver_At
 */ 
public function getEmail_ver_At()
{
return $this->email_ver_At;
}

/**
 * Set the value of email_ver_At
 *
 * @return  self
 */ 
public function setEmail_ver_At($email_ver_At)
{
$this->email_ver_At = $email_ver_At;

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
 * Get the value of id_prod
 */ 
public function getId_prod()
{
return $this->id_prod;
}

/**
 * Set the value of id_prod
 *
 * @return  self
 */ 
public function setId_prod($id_prod)
{
$this->id_prod = $id_prod;

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

/**
 * Get the value of phone
 */ 
public function getPhone()
{
return $this->phone;
}

/**
 * Set the value of phone
 *
 * @return  self
 */ 
public function setPhone($phone)
{
$this->phone = $phone;

return $this;
}
}
<?php
namespace App\http\requests;
use App\Database\Config\Connection;
class validation{
    private array $errors=[];
    public function required($value,$name)
    {
        if(empty($value))
        {
            $this->errors[$name][__FUNCTION__]= "{$name} is required";
        }
        return $this;
    }
    public function geterrors()
{
    return $this->errors;
}
public function confirmation($val,$val_compare,$val_name='password')
{
if($val != $val_compare)
$this->errors[$val_name][__FUNCTION__]= "{$val_name} is not confirmed";
}
public function max($val,$max,$val_name)
{   if(strlen($val)>$max)
    $this->errors[$val_name][__FUNCTION__]= "{$val_name} must be less than {$max} chars";

}
public function regex($regularexp,$val,$val_name,$msg= "invalid")
    {
        if(!preg_match($regularexp,$val)){
            $this->errors[$val_name][__FUNCTION__]= "{$val_name} {$msg}";
        }
        return $this;
    }
    public function in($array,$val,$val_name)
    {
        if(!in_array($val,$array))
        $this->errors[$val_name][__FUNCTION__]= "{$val_name} must be ".implode(',',$array);
        
        return $this;
    }
  

    // public function unique(string $table,string $column = "",$val_name,$val)
    // {
    //     if(!$column){
    //         $column = $this->valueName;
    //     }
    //     $connection = new Connection;
    //     $stmt = $connection->con->prepare("SELECT * FROM `{$table}` WHERE {$column} = ?");
    //     $stmt->bind_param('s',$val);
    //     $stmt->execute();
    //     if($stmt->get_result()->num_rows == 1 ){
    //         $this->errors[$val_name][__FUNCTION__]= "{$val_name} Already Exists";
    //     }
    //     return $this;
    // }

}
$val = new validation;
// $val->required("",'first_name')->max("nour",32,'first_name');
// $val->in(['m','f'],'x','gender');
// $val->confirmation("1234","1234");
// $val->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/','nour@gmail.com','email','enter @' );
// print_r($val->geterrors());
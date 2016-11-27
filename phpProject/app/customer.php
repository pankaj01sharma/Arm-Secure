<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customer';
    protected $primaryKey='CustomerID';
    protected $fillable=['CustomerID','FirstName','LastName','Address','City','PostalCode','Email','CustomerStatus','CustomerType','StartDate','DeliveryMethod'];
   // protected $fillable=['FirstName'];

}

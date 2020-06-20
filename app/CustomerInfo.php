<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    protected $fillable = ['customer_name','email','numbers','product_id','description'];
}

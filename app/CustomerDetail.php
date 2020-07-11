<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDetail extends Model
{
    protected $fillable = ['customer_first_name','customer_last_name','email','numbers','product_id','description'];
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable=[
    	'name','photo'
    ];
    public function items($value=''){
    	return $this->hasMany('App\Item');
    }
    public function sucategory($value=''){
    	return $this->belongsTo('App\Subcategory');
    }
}

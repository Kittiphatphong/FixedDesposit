<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'type'
    ];
    public function customers(){
        return $this->hasMany(Customer::class);
    }
}

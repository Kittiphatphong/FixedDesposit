<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'fname', 'lname', 'contact','idNumber','address'
    ];
    public function accounts(){
        return $this->hasMany(Account::class);
    }
}

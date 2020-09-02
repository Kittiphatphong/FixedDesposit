<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'fname', 'lname','nname','company','position','department','contact','idNumber','address'
    ];
    public function accounts(){
        return $this->hasMany(Account::class);
    }
}

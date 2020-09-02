<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeDisposit extends Model
{
    protected $fillable = [
        'period','yearOrMonth','type','money','ticket'    
    ];
    public function accounts(){
        return $this->hasMany(Account::class);
    }
}

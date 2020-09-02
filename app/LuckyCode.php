<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LuckyCode extends Model
{
   protected $fillable = [
       'idCode' , 'account_id'
    ];
    public function accounts(){
        return $this->belongsTo(Account::class,'account_id');
    }
    public function winRandoms(){
        return $this->hasOne(WinRandom::class);
    }
}

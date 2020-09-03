<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'idAccount', 'start','end','interest','amount','amountWord','receiveInterest','user_id','customer_id','typeDisposit_id','employee_id'
    ];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function customers(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function typeDisposits(){
        return $this->belongsTo(TypeDisposit::class,'typeDisposit_id');
    }

    public function employees(){
        return $this->belongsTo(TypeDisposit::class,'employee_id');
    }
    public function accounts(){
        return $this->hasMany(Account::class);
    }
}

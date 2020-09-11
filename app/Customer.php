<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'fname', 'lname', 'contact','document_id','documentNumber','address'
    ];
    public function accounts(){
        return $this->hasMany(Account::class);
    }
    public function documents(){
        return $this->belongsTo(Document::class,'document_id');
    }
}

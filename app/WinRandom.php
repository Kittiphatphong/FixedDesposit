<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WinRandom extends Model
{
    protected $fillable = [
        'luckyCode_id'
    ];
    public function luckyCodes(){
        return $this->belongsTo(LuckyCode::class,'luckyCode_id');
    }
}
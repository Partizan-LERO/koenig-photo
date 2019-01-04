<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function tariff() {
        return $this->belongsTo(Tariff::class);
    }
}

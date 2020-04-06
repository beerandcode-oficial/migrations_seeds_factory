<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

    protected $fillable = [
        'user_id',
        'address',
        'number',
        'district',
        'cep',
        'complement',
        'state',
        'city',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

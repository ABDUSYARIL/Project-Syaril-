<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'name',
        'email',
        'campaign_id',
        'amount',
        'message'
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
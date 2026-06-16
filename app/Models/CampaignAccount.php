<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignAccount extends Model
{
    public function campaigns()
{
    return $this->hasMany(Campaign::class);
}
}

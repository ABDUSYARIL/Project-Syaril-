<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'description',
        'target_donation',
        'collected_donation',
        'deadline',
    ];
    public function donations()
{
    return $this->hasMany(Donation::class);
}

public function categories()
{
    return $this->belongsToMany(Category::class);
}

public function campaignAccount()
{
    return $this->belongsTo(CampaignAccount::class);
}
}

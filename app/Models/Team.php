<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    public function players()
    {
        return $this->belongsToMany(Player::class);
    }

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($team) {
            $team->uuid = Str::uuid();
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}

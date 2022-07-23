<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Player extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }

    public function draft()
    {
        return $this->belongsTo(Draft::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($player) {
            $player->uuid = Str::uuid();
        });
    }

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}

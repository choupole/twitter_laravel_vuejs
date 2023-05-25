<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // grace a carbon on arrive a parse notre date

    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format('d M. Y');
    }
}

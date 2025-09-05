<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Download extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'downloadable_id',
        'downloadable_type',
        'ip_address',
        'user_agent',
        'device_type',
        'browser',
        'os',
        'location',
    ];

    public function downloadable()
    {
        return $this->morphTo()->withTrashed();;
    }

    // this will defines the book relation
    public function getBookAttribute()
    {
        return $this->downloadable instanceof Book ? $this->downloadable : null;
    }

}

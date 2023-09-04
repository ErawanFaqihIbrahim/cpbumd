<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calonpengurus extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $table = 'calonpengurus';

    public function user()
    {
        return $this->hasOne(User::class, 'calonpengurus_id');
    }
}

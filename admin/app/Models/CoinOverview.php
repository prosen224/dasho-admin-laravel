<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoinOverview extends Model
{
    use HasFactory;
    protected $table = 'coins_overview';

    public function member()
    {
        return $this->belongsTo(Member::class, 'user_id', 'user_id');
    }
}

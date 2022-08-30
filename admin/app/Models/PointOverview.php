<?php

namespace App\Models;
use App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointOverview extends Model
{
    use HasFactory;
    
    protected $table = 'points_overview';

    public function member()
    {
        return $this->belongsTo(Member::class, 'user_id', 'user_id');
    }
}

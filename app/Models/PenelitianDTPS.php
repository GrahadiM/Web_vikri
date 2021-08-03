<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenelitianDTPS extends Model
{
    use HasFactory;
    protected $table = 'penelitian_d_t_p_s';
    protected $fillable = ['user_id', 'sumber', 'total_judul'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

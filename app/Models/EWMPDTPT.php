<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EWMPDTPT extends Model
{
    use HasFactory;
    protected $table = 'e_w_m_p_d_t_p_t_s';
    protected $fillable = ['user_id', 'total_sks'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

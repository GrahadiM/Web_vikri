<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PKMDTPS extends Model
{
    use HasFactory;
    protected $table = 'p_k_m_d_t_p_s';
    protected $fillable = ['user_id', 'sumber', 'total_judul'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

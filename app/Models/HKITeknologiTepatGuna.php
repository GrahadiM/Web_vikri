<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HKITeknologiTepatGuna extends Model
{
    use HasFactory;
    protected $table = 'h_k_i_teknologi_tepat_gunas';
    protected $fillable = ['user_id', 'pkm', 'tahun', 'ket'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

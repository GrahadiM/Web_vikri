<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HKIHakPaten extends Model
{
    use HasFactory;
    protected $table = 'h_k_i_hak_patens';
    protected $fillable = ['user_id', 'pkm', 'tahun', 'ket'];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

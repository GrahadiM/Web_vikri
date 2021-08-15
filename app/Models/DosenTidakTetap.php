<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenTidakTetap extends Model
{
    use HasFactory;
    protected $table = 'dosen_tidak_tetaps';
    protected $fillable = 
    [
        'user_id',
        'pps',
        'bk',
        'ja',
        'spp',
        'skpi',
        'mk',
        'kmk',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

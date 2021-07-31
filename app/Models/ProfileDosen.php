<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDosen extends Model
{
    use HasFactory;
    protected $table = 'profile_dosen';
    protected $guarded = [''];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

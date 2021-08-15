<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'role_id',
        'status_id',
        'nidn',
        'phone',
        'gender',
        'birthday',
        'image',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }
    public function profile()
    {
        return $this->belongsTo('App\Models\ProfileDosen');
    }
    public function dosentetap()
    {
        return $this->belongsTo('App\Models\DosenTetap');
    }
    public function dosentidaktetap()
    {
        return $this->belongsTo('App\Models\DosenTidakTetap');
    }
}

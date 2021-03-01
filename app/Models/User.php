<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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

    public function data_siswas()
    {
        return $this->hasOne('App\Models\DataSiswa');
    }

    public function data_ortus()
    {
        return $this->hasOne('App\Models\DataOrtu');
    }

    public function data_pendukung()
    {
        return $this->hasOne('App\Models\DataPendukung');
    }

    public function surat_cash()
    {
        return $this->hasMany('App\Models\SuratCash');
    }

    public function surat_install()
    {
        return $this->hasMany('App\Models\SuratInstallment');
    }

    public function pengumuman()
    {
        return $this->hasMany('App\Models\Pengumuman');
    }

}

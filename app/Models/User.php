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
        'tahun_ajarans',
        'status',
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
        return $this->hasOne(DataSiswa::class, 'users_id');
    }

    public function data_ortus()
    {
        return $this->hasOne(DataOrtu::class, 'users_id');
    }

    public function data_pendukung()
    {
        return $this->hasOne(DataPendukung::class, 'users_id');
    }

    public function surat_cash()
    {
        return $this->hasMany(SuratCash::class,'users_id');
    }

    public function surat_install()
    {
        return $this->hasMany(SuratInstallment::class, 'users_id');
    }

    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'users_id');
    }

    public function file_pendukung()
    {
        return $this->hasMany(FilePendukung::class, 'users_id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class, 'users_id');
    }

    public function repayment()
    {
        return $this->hasMany(RePayment::class, 'users_id');
    }

}

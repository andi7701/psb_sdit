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
        return $this->hasOne(DataSiswa::class);
    }

    public function data_ortus()
    {
        return $this->hasOne(DataOrtu::class);
    }

    public function data_pendukung()
    {
        return $this->hasOne(DataPendukung::class,);
    }

    public function surat_cash()
    {
        return $this->hasMany(SuratCash::class);
    }

    public function surat_install()
    {
        return $this->hasMany(SuratInstallment::class);
    }

    public function pengumumans()
    {
        return $this->hasOne(Pengumuman::class);
    }

    public function file_pendukungs()
    {
        return $this->hasOne(FilePendukung::class);
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }

    public function repayment()
    {
        return $this->hasMany(RePayment::class);
    }

}

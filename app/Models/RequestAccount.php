<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class RequestAccount extends Model
{
    protected $fillable = [
      'user_id', 'account_number', 'status', 'order_number', 'jenis_akun', 'nama', 'tempat_lahir', 'dob', 'alamat', 'tipe_id', 'no_id', 'phone', 'pengalaman', 'tujuan', 'npwp', 'jenis_kelamin', 'status', 'nama_ibu', 'status_rumah', 'telp_rumah', 'kode_pos', 'nama_darurat', 'telp_darurat', 'hubungan', 'alamat_darurat',
      'nama_perusahaan', 'bidang_usaha', 'jabatan', 'lama_bekerja', 'alamat_kantor', 'kode_pos_kantor', 'telp_kantor', 'kantor_sebelum', 'nama_bank', 'cabang', 'telp_bank', 'no_rek', 'nama_rek', 'id_card', 'rek_koran', 'foto', 'pekerjaan',
      'approval_yes','docs','account_type_id','wp','kode_pos_darurat','penghasilan','lokasi_rumah','njop','deposito_bank','deposito','daftar_kekayaan','pasangan'
    ];


    public function tasks(){
      return $this->hasMany('App\Models\UserTask');
    }
}

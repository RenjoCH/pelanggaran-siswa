<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $guarded;

    public function pelanggaran()
    {
       return $this->belongsTo(Pelanggaran::class, 'id_pelanggaran');
    }

}

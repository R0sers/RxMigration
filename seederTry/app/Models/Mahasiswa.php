<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'npm';

    protected $guarded = ['npm','nidn', 'nama','created_at', 'updated_at' ];
}

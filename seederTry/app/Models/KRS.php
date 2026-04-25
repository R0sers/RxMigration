<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KRS extends Model
{
    protected $table = 'krs';

    protected $primaryKey = 'id';

    protected $guarded = ['id', 'nama','kode_matakuliah','created_at', 'updated_at' ];
}

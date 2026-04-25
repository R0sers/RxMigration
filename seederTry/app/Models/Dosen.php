<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'nidn';

    protected $guarded = ['nidn', 'nama', 'created_at', 'updated_at'];
}

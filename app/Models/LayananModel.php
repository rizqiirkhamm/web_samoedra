<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananModel extends Model
{
    protected $table = 'layanan';

    static public function getRecord()
    {
        return self::select('id', 'nama_layanan', 'slug')
                   ->get();
    }
}

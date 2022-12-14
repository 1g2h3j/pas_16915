<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = "mapels";

    protected $primaryKey = "id_mapel";

    protected $fillable = [
        "nama_mapel",
        "kode_mapel",
    ];

    public function pembelajaran()
    {
        return $this->hasMany(Pembelajaran::class, "id_pembelajaran");
    }
}

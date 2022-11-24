<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelajaran extends Model
{
    use HasFactory;

    protected $table = "pembelajarans";

    protected $primaryKey = "id_pembelajaran";

    protected $fillable = [
        "id_guru",
        "id_mapel",
        "hari",
        "tanggal",
    ];
}

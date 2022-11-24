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

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }
}

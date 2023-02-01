<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superadmins extends Model
{
    use HasFactory;

    protected $table = "superadmins";

    protected $primaryKey = "id_superadmin";

    protected $fillable = [
        "name",
        "nip",
        "role",
        "address",
    ];
}

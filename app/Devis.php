<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Devis extends Model
{
    protected $fillable = [
        "id",
        "mesure",
        "largeur",
        "espace",
        "hauteur",
        "p_palier_base",
        "p_palier_haut",
        "p_ensembre",
        "societe",
        "name",
        "phone",
        "email",
        "address",
        "codepostal",
        "city",
        "description",
        "created_at",
        "updated_at",
        "user_id",
        "interested"
    ];
}

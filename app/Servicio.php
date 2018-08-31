<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Facultativo;
class Servicio extends Model
{
    //
    public function facultativo()
    {
        return $this->hasOne(Facultativo::class,"facultativos_id");
    }
}

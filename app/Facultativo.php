<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Servicio;
class Facultativo extends Model
{
    //
    public function servicio()
    {
        return $this->belongsTo(Servicio::class,"servicios_id");
    }

}

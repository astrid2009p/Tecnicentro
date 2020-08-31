<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cliente extends Model
{
    protected $table = 'cliente';


    protected $fillable = [
        'dpi', 'primerNombre', 'segundoNombre', 'tercerNombre', 'primerApellido', 'segundoApellido', 'apellidoCasado', 'fechaNacimiento',
    ];

     protected $hidden = [
        'id',
    ];
    
    public function getCurrentMonthCount()
    {
        $currentMonth = date('m');
        $data = DB::table("cliente")
            ->whereRaw('MONTH(created_at) = ?',[$currentMonth])
            ->count();
            
        return $data;
    }

}

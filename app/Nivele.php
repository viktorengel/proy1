<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nivele
 *
 * @property $id
 * @property $nombre
 * @property $especialidad_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Especialidade $especialidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nivele extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'especialidad_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','especialidad_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function especialidade()
    {
        return $this->hasOne('App\Especialidade', 'id', 'especialidad_id');
    }
    

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role as SpatieRole;

/**
 * Class Policia
 *
 * @property $id
 * @property $cedula
 * @property $nombres
 * @property $apellidos
 * @property $fecha_nacimiento
 * @property $tipo_sangre
 * @property $ciudad_nacimiento
 * @property $celular
 * @property $rango
 * @property $id_dependencia
 * @property $rol
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends SpatieRole
{
	use HasRoles;

	protected $table = 'roles';
	static $rules = [
		'name' => 'required',

	];
	protected $fillable = ['name'];

	/*	public function permissions()
		   {
			   return $this->belongsToMany(Permiso::class, 'role_has_permissions', $relatedPivotKey = 'role_id', $foreignPivotKey = 'permission_id');
		   }
	   */



	/**
	 * Attributes that should be mass-assignable.
	 *
	 * @var array
	 */



}

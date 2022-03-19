<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property string $KodeProject
 * @property string|null $NamaProject
 * @property string|null $Keterangan
 * @property string|null $Image1
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'project';
	protected $primaryKey = 'KodeProject';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'NamaProject',
		'Keterangan',
		'Image1'
	];
}

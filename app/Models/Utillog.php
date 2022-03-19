<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Utillog
 * 
 * @property int $ID
 * @property int|null $JumlahPengunjung
 *
 * @package App\Models
 */
class Utillog extends Model
{
	protected $table = 'utillog';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'JumlahPengunjung' => 'int'
	];

	protected $fillable = [
		'JumlahPengunjung'
	];
}

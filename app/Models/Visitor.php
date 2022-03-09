<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitor
 * 
 * @property string $IP
 * @property Carbon|null $Tanggal
 *
 * @package App\Models
 */
class Visitor extends Model
{
	protected $table = 'visitor';
	protected $primaryKey = 'IP';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'Tanggal'
	];

	protected $fillable = [
		'Tanggal'
	];
}

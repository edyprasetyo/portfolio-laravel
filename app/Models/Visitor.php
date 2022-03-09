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
 * @property string|null $Header1
 * @property string|null $Header2
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
		'Header1',
		'Header2',
		'Tanggal'
	];
}

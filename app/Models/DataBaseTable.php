<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Sep 2019 13:24:36 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Thing
 * 
 * @property int $id
 * @property string $name
 * @property string $comment
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models\Base
 */
class DataBaseTable extends Eloquent
{
	protected $table = 'data_base_table';

	protected $fillable = [
		'name',
		'comment'
	];
}

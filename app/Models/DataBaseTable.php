<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 28 Sep 2019 13:24:36 +0000.
 */

namespace App\Models\Base;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Thing
 * 
 * @property int $id
 * @property string $alternate_name
 * @property string $name
 * @property int $url_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Models\Url $url
 * @property \Illuminate\Database\Eloquent\Collection $organizations
 * @property \Illuminate\Database\Eloquent\Collection $people
 * @property \App\Models\SameA $same_a
 * @property \Illuminate\Database\Eloquent\Collection $web_sites
 *
 * @package App\Models\Base
 */
class DataBaseTable extends Eloquent
{
	protected $table = 'data_base_table';
}

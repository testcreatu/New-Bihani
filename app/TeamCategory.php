<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable ;


class TeamCategory extends Model implements Auditable
{
	use \OwenIt\Auditing\Auditable ;
	protected static $logattributes =['name_eng','priority'];
    
}

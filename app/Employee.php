<?php

namespace Enterprise;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	Protected $fillable = ['name', 'last_name','day_of_birth','gender','address','phone','station','description','image'];
    /**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
	    return 'slug';
	}
}

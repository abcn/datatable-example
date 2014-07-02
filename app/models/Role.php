<?php

class Role extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';


	/**
	 * Get the users.
	 *
	 * @return mixed
	 */
	public function users()
    {
        return $this->belongsToMany('User', 'user_roles', 'user_id', 'role_id');
    }

}

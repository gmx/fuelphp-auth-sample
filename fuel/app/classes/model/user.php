<?php

use Orm\Model;

class Model_User extends Model {

	protected static $_properties = array(
		'id',
		'username',
		'password',
		'email',
		'phone',
		'created_at',
		'updated_at'
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => true,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);


}
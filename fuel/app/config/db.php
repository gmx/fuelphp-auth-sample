<?php
/**
 * Base Database Config.
 *
 * See the individual environment DB configs for specific config information.
 */

return array(
	'active' => 'development',

	/**
	 * Base config, just need to set the DSN, username and password in env. config.
	 */
	'default' => array(
		'type'        => 'pdo',
		'connection'  => array(
			'persistent' => false,
		),
		'identifier'   => '`',
		'table_prefix' => '',
		'charset'      => 'utf8',
		'enable_cache' => true,
		'profiling'    => false,
	),

	'development' => array(
		'type'           => 'mysqli',
		'connection'     => array(
			'hostname'       => 'localhost',
			'port'           => '3306',
			'database'       => 'fuel-auth-sys',
			'username'       => 'root',
			'password'       => '',
			'persistent'     => true,
		),
		'identifier'   => '`',
		'table_prefix'   => '',
		'charset'        => 'utf8',
		'enable_cache'   => true,
		'profiling'      => false,
	),		

	'redis' => array(
		'default' => array(
			'hostname'  => '127.0.0.1',
			'port'      => 6379,
			'timeout'	=> null,
		)
	),

);

<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
		/*		'db' => array(
		 'driver' => 'Pdo',
				'dsn' => 'mysql:dbname=shaguangbula;host=mysql51-115.perso',
				'driver_options' => array(
						PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
				),
		),
		'service_manager' => array(
				'factories' => array(
						'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
				),
		),
		'view_manager' => array(
				'strategies' => array(
						'ViewJsonStrategy',
				),
		),
		*/
		//以上配置适用服务器数据库
		//以下配置适用本地数据库
		
		'db' => array(
				'driver' => 'Pdo',
				'dsn' => 'mysql:dbname=api;hostname=localhost',
				'driver_options' => array(
						PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
				),
		),
		'service_manager' => array(
				'factories' => array(
						'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
				),
		),
		'view_manager' => array(
				'strategies' => array(
						'ViewJsonStrategy',
				),
		),

);

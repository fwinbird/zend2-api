<?php
/**
 * Local Configuration Override
 *
 * This configuration override file is for overriding environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * .dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore included
 * in ZendSkeletonApplication. This is a good practice, as it prevents sensitive
 * credentials from accidentally being committed into version control.
 */

return array(
		
/*		'db' => array(
		 'username' => 'shaguangbula',
		'password' => 'ANFERNEE8379',
		),
*/
//以上配置适用服务器数据库
//以下配置适用本地数据库
		
		'db' => array(
				'username' => 'usrapi',
				'password' => 'pwdapi',
		),
		
);

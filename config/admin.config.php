<?php

return array(
	'admin' => array(
		'models' =>array(
			'atpacl_group' => array(
				'displayName' => 'Group',
				'class' => 'ATPAcl\Model\Group',
				'category' => 'ACL',
				'displayColumns' => array('Identifier'),
				'defaultOrder' => 'name ASC',
			),
			'atpacl_permission' => array(
				'displayName' => 'Permission',
				'class' => 'ATPAcl\Model\Permission',
				'category' => 'ACL',
				'displayColumns' => array('Identifier'),
				'defaultOrder' => 'name ASC',
			),
		),
	),
);

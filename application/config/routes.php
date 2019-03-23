<?php

return [
	// MainController
	'educationProject/main/index' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'educationProject/main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'educationProject/about' => [
		'controller' => 'main',
		'action' => 'about',
	],
	'educationProject/contact' => [
		'controller' => 'main',
		'action' => 'contact',
	],
	'educationProject/post/{id:\d+}' => [
		'controller' => 'main',
		'action' => 'post',
	],
	// AdminController
	'educationProject/admin/login' => [
		'controller' => 'admin',
		'action' => 'login',
	],
	'educationProject/admin/logout' => [
		'controller' => 'admin',
		'action' => 'logout',
	],
	'educationProject/admin/add' => [
		'controller' => 'admin',
		'action' => 'add',
	],
	'educationProject/admin/edit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'edit',
	],
	'educationProject/admin/delete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'delete',
	],
	'educationProject/admin/posts/{page:\d+}' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'educationProject/admin/posts' => [
		'controller' => 'admin',
		'action' => 'posts',
	],
	'educationProject/account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],
	'educationProject/account/logout' => [
		'controller' => 'account',
		'action' => 'logout',
	],
	'educationProject/account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],
	'educationProject/account/profile' => [
		'controller' => 'account',
		'action' => 'profile',
	],
	'educationProject/account/list/{id:\d+}' => [
		'controller' => 'account',
		'action' => 'list',
	],
	'educationProject/account/post/{id:\d+}' => [
		'controller' => 'account',
		'action' => 'post',
	],
	'educationProject/admin/subjects' => [
		'controller' => 'admin',
		'action' => 'subjects',
	],

	'educationProject/admin/subjectsList' => [
		'controller' => 'admin',
		'action' => 'subjectsList',
	],
	'educationProject/contentmaker/login' => [
		'controller' => 'contentmaker',
		'action' => 'login',
	],
	'educationProject/contentmaker/add' => [
		'controller' => 'contentmaker',
		'action' => 'add',
	],
	'educationProject/contentmaker/edit/{id:\d+}' => [
		'controller' => 'contentmaker',
		'action' => 'edit',
	],

	'educationProject/contentmaker/delete/{id:\d+}' => [
		'controller' => 'contentmaker',
		'action' => 'delete',
	],
	'educationProject/contentmaker/posts' => [
		'controller' => 'contentmaker',
		'action' => 'posts',
	],
	'educationProject/contentmaker/subjects' => [
		'controller' => 'contentmaker',
		'action' => 'subjects',
	],
	'educationProject/contentmaker/subjectsList' => [
		'controller' => 'contentmaker',
		'action' => 'subjectsList',
	],
	'educationProject/admin/subjectDelete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'subjectDelete',
	],
	'educationProject/admin/contentmaker' => [
		'controller' => 'admin',
		'action' => 'contentmaker',
	],
	'educationProject/admin/contentmakers' => [
		'controller' => 'admin',
		'action' => 'contentmakers',
	],
	'educationProject/admin/contentmakerDelete/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'contentmakerDelete',
	],
	'educationProject/admin/contentmakersEdit/{id:\d+}' => [
		'controller' => 'admin',
		'action' => 'contentmakersEdit',
	],

];

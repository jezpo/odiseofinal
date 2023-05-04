<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */

    'menu' => [[
		'icon' => 'home',
		'title' => 'Principal',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/kardex/panel',
			'title' => 'Panel'
		]]
	],[
		'icon' => 'people',
		'title' => 'Estudiantes',
		'url' => 'javascript:;',
        'caret' => true,
//		'badge' => '10',
		'sub_menu' => [[
			'url' => '/kardex/tramites/lista',
			'title' => 'Tramites'
		]]
	],[
		'icon' => 'settings',
		'title' => 'Opciones',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/kardex/caja',
			'title' => 'Control caja'
		],[
            'url' => '/kardex/opciones',
            'title' => 'Vacio'
        ]]
	],[
		'icon' => 'help',
		'title' => 'Ayuda',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/kardex/ayuda',
			'title' => 'Vacio'
		]]
	]]
];

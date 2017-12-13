<?php


class Route
{
	static function start()
	{
		$segments = explode('/', $_SERVER['REQUEST_URI']);

		$controllerName = 'Main';
		$actionName = 'index';

		if(!empty($segments[1])){
			$controllerName = $segments[1];
		}

		if(!empty($segments[2])){
			$actionName = $segments[2];
		}
		$controllerFile = 'Controller'.$controllerName;
		$actionName = 'action_'.$actionName;
	}
}
//explode превращает страку в массив
// 1arg - разделитель,2 - строка
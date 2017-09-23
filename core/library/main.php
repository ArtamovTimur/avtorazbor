<?php
	function getUrlSegment($n)
	{
		$res = explode('/', $_GET['url']);
		return $res[$n];
	}

	function render($viewName, array $data = [])
	{
		require_once 'core/views/layouts/' . $viewName . '.php';
	}

	function renderAdmin($viewName, array $data = [])
	{
		require_once 'core/views/layouts/admin/' . $viewName . '.php';
	}

	function validForm($data)
	{
		foreach ($data as $value) {
			if(!isset($value) || empty($value))
				return false;
		}
		return true;
	}
?>
<?php

class Bootstrap
{
	public function __construct() 
	{
		$notFound = FALSE;

        if (isset ($_GET['path'])) {
			$tokens = explode('/', rtrim($_GET['path'], '/'));
			
			$controllerName = ucfirst(array_shift($tokens));
			if (file_exists('Controllers/'.$controllerName.'.php')) {
				if (!empty($tokens)) {
					$actionName = array_shift($tokens);
					if (method_exists ( $controllerName , $actionName )) {
						$this->request($controllerName, $actionName, @$tokens);
					}
					else {
						$notFound = TRUE;
					}
				}
				else
				{
					$this->request($controllerName, "index", @$tokens);
				}				
			}
			else {
				$notFound = TRUE;
			}
		}
		else {
			$notFound = TRUE;
		}

        if ( $notFound ) {
            
		}
	}

	private function request($controllerName, $actionName, $tokens = null)
	{
		$controller = new $controllerName();
		$response = "";

		if($tokens != null)
			$response = $controller->$actionName(@$tokens);
		else
			$response = $controller->$actionName();

		$this->response($response);
	}

	private function response($out)
	{
		echo json_encode((object)$out);
	}
}

?>
<?php

class Template{
	private $vars = array();

	public function assign($key, $value){
		$this->vars[$key] = $value;
	}

	public function render($template_name){
		$path = $template_name . '.html';

		if(file_exists($path)){
			$contents = file_get_contents($path);

			foreach($this->vars as $key => $value){
				$contents = preg_replace('/\[' . $key . '\]/', $value, $contents);
			}
			eval(' ?>' . $contents . '<?php ');
		}else{
			exit('<h1>Template Error</h1>');
		}
	}
}

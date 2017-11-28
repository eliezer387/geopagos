<?php

include_once 'FigureCreator.php';

class Test
{
	public function __construct(){
	    
	    $create = new FigureCreator();
		
	    $figure = $create->factoryFigure(new Triangle());
		echo ('<pre>'. print_r(json_encode($figure)) . '</pre> <br>');
		
				
		$figure = $create->factoryFigure(new Square());
		
		echo ('<pre>'. print_r(json_encode($figure)) . '</pre> <br>');
	
		$figure = $create->factoryFigure(new Circle());
		
		echo ('<pre>'. print_r(json_encode($figure)). '</pre>');
	}	
}

$test = new Test();
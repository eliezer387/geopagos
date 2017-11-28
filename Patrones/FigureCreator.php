<?php 
 
    include_once('Creator.php');
    include_once('Triangle.php');
    include_once('Square.php');
    include_once('Circle.php');
    
    class FigureCreator extends Creator{
        public function factoryFigure(IFigure $figure)
        {
            $this->createdFigure = new $figure;
            
            return ($this->createdFigure->create());
        }
    
        
    }
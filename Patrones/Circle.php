<?php 
    include_once 'IFigure.php';

    class Circle implements IFigure{
    
        public function create(){
            
            $this->type = 'Circle';
            $this->figure->type = $this->type; 
            $this->figure->diameter = 1;
            $this->figure->high = null;
            $this->figure->base = null;
            $this->figure->area = 0.78;
            
            return $this->figure;
        }
    }
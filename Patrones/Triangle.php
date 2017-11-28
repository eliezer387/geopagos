<?php 
   
include_once  'IFigure.php';
    
    class Triangle implements IFigure {
        
        public function create() {
            
            $this->type = 'Triangle';
            $this->figure->type = $this->type;
            $this->figure->base = 2;
            $this->figure->high = 2;
            $this->figure->diameter = null;
            $this->figure->area = 2;
            
            return $this->figure;
        }
        
    }


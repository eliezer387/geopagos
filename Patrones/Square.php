<?php 

    include_once 'IFigure.php';
    
    class Square implements IFigure{
    
        public function create(){
            
            $this->type = 'Square';
            $this->figure->type = $this->type;   
            $this->figure->diameter = null;
            $this->figure->base = 2;
            $this->figure->high = 2;
            $this->figure->area = 4;
            
            return $this->figure;
         }
         
         
        
    }
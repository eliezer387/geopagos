<?php 

    require_once 'IFigure.php';

    abstract class Creator{
        protected $createdFigure;
        abstract public function factoryFigure(IFigure $figure);
    }



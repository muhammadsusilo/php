<?php

namespace Data;

class Shape {

   public function getCorner(){
      return 0;
   }

}

class Rectangle extends Shape {

   public function getCorner(){
      
      return 4;

   }

   public function getParentCorner(){

      // untuk mengakses getcorner parentnya / yang berada di class shape
      return parent::getCorner();

   }

}
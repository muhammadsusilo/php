<?php

// Memampilkan todo
function showTodoList(){

   global $todoList;

   echo "TODOLIST";

   foreach ($todoList as $number => $value){
      echo "$number . $value";
   }
   
}
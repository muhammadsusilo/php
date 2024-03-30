<?php

// Memampilkan todo
function showTodoList(){

   global $todoList;

   echo "TODOLIST\n";

   foreach ($todoList as $number => $value){
      echo "$number . $value";
   }
   
}
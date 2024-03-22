<?php

// Memampilkan todo
function showTodoList(){

   global $todolist;

   echo "TODOLIST";

   foreach ($todolist as $number => $value){
      echo "$number . $value";
   }
   
}
<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";

function viewAddTodoList()
{
   echo "Memambah Todo";

   $todo = input(" Todo (x untuk batal)");

   if ($todo == "x" ){
      echo "anda Membatalkannya";
   }else {
      addTodoList($todo);
   }

}
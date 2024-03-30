<?php

require_once "../Model/Todolist.php";
require_once "../Helper/Input.php";
require_once "../BussinesLogic/AddTodoList.php";

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
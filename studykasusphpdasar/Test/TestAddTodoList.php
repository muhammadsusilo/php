<?php

require_once "../Model/Todolist.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Muhammad");
addTodoList("Susilo");
  
var_dump($todoList);
<?php

require_once "../Model/Todolist.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/RemoveTodolist.php";

addTodoList("Muhammad");
addTodoList("Susilo");

showTodoList();

removeTodoList(1);

showTodoList();
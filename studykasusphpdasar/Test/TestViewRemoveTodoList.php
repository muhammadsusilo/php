<?php

require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveShowTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

addTodoList("Muhammad\n");
addTodoList("Susilo\n");
addTodoList("Programmer\n");
addTodoList("Zaman\n");
addTodoList("Now\n");

showTodoList();

viewRemoveTodoList();

<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";

addTodoList("Muhammad\n");
addTodoList("Susilo\n");

viewAddTodoList();

showTodoList();
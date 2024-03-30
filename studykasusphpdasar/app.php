<?php
require_once __DIR__ . "/Model/Todolist.php";
require_once __DIR__ . "/BussinesLogic/AddTodoList.php";
require_once __DIR__ . "/BussinesLogic/RemoveTodolist.php";
require_once __DIR__ . "/BussinesLogic/ShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveShowTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi Todolist" ;

ViewShowTodoList();
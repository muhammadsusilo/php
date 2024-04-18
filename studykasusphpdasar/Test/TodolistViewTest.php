<?php


require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php"; 
require_once __DIR__ . "/../Helper/InputHelper.php";

use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist():void
{
   $todolistRepository = new TodolistRepositoryImpl();
   $todolistService = new TodolistServiceImpl($todolistRepository);
   $todolistView = new TodolistView($todolistService);

   $todolistView->addTodolist("Belajar PHP");
   $todolistView->addTodolist("Belajar PHP OOP");
   $todolistView->addTodolist("Belajar PHP Databases");

   $todolistView->showTodolist();
}

function testViewAddTodolist():void
{
   $todolistRepository = new TodolistRepositoryImpl();
   $todolistService = new TodolistServiceImpl($todolistRepository);
   $todolistView = new TodolistView($todolistService);

   $todolistView->addTodolist("Belajar PHP");
   $todolistView->addTodolist("Belajar PHP OOP");
   $todolistView->addTodolist("Belajar PHP Databases");

   $todolistView->showTodolist();

   $todolistView->addTodolist();

   $todolistView->showTodolist();
}

// testViewShowTodolist();
testViewAddTodolist();


// tes view add to dolist belum

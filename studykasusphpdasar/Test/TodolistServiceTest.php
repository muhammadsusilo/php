<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist():void
{

   $todolistRepository = new TodolistRepositoryImpl();
   $todolistRepository->todolist[1] = new Todolist("Belajar PHP");
   $todolistRepository->todolist[2] = new Todolist("Belajar OOP");
   $todolistRepository->todolist[3] = new Todolist("Belajar Database");

   $todolistService = new TodolistServiceImpl($todolistRepository);
   $todolistService->showTodolist();

}

function testAddTodolist():void
{
   $connection = \Config\Database::getConnection();
   $todolistRepository = new TodolistRepositoryImpl($connection);

   $todolistService = new TodolistServiceImpl($todolistRepository);
   $todolistService->addTodolist("Belajar PHP");
   $todolistService->addTodolist("Belajar PHP OOP");
   $todolistService->addTodolist("Belajar PHP DATABASE");

   // $todolistService->showTodolist();
   // addTodolist not clear

}
function testRemoveTodolist():void
{ 
   $connection = \Config\Database::getConnection();
   $todolistRepository = new TodolistRepositoryImpl($connection);

   $todolistService = new TodolistServiceImpl($todolistRepository);
   // $todolistService->addTodolist("Belajar PHP");
   // $todolistService->addTodolist("Belajar PHP OOP");
   // $todolistService->addTodolist("Belajar PHP DATABASE");

   echo $todolistService->removeTodolist(5) . PHP_EOL;
   echo $todolistService->removeTodolist(4) . PHP_EOL;
   echo $todolistService->removeTodolist(3) . PHP_EOL;
   echo $todolistService->removeTodolist(2) . PHP_EOL;
   echo $todolistService->removeTodolist(1) . PHP_EOL;
}

testRemoveTodolist();

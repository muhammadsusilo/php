<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

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
   $todolistRepository = new TodolistRepositoryImpl();

   $todolistService = new TodolistServiceImpl($todolistRepository);
   $todolistService->addTodolist("Belajar PHP");
   $todolistService->addTodolist("Belajar PHP OOP");
   $todolistService->addTodolist("Belajar PHP DATABASE");

   $todolistService->showTodolist();

}
function testRemoveTodolist():void
{
   $todolistRepository = new TodolistRepositoryImpl();

   $todolistService = new TodolistServiceImpl($todolistRepository);
   $todolistService->addTodolist("Belajar PHP");
   $todolistService->addTodolist("Belajar PHP OOP");
   $todolistService->addTodolist("Belajar PHP DATABASE");

   $todolistService->showTodolist();

   $todolistService->removeTodolist(1);
   $todolistService->showTodolist();

   $todolistService->removeTodolist(4);
   $todolistService->showTodolist();

   $todolistService->removeTodolist(2);
   $todolistService->showTodolist();

   
}

// testShowTodolist();
// testAddTodolist();
testRemoveTodolist();

<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BussinesLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList()
{
  while (true){

   showTodoList();

   echo "MENU" . PHP_EOL ;
   echo "1. Tambah Todo " ;
   echo "2. Hapus Todo " ;
   echo "X. Keluar " ;

   $pilihan = input("Pilih");

   if ($pilihan ==  "1"){ 
      viewAddTodoList();
   }else if ($pilihan == "2"){
      viewRemoveTodoList();
   }else if ($pilihan == "x"){
      break;
   }else {
      echo "Pilihan tidak di mengerti";
   }

  }
  echo "Terima Kasih \nSampai jumpa lagi";

}
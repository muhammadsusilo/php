<?php

require_once "../Model/Todolist.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../View/ViewRemoveShowTodoList.php";
require_once "../Helper/Input.php";

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
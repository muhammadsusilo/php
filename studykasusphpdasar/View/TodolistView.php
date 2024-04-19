<?php

namespace View {
use Service\TodolistService;
use Helper\InputHelper;
   class TodolistView
   {

      private TodolistService $todolistService;

      public function __construct(TodolistService $todolistService) {
         $this->todolistService = $todolistService;
      }

      function showTodolist(): void
      {
          while (true){
            $this->todolistService->showTodolist();

            echo "MENU" . PHP_EOL ;
            echo "1. Tambah Todo " . PHP_EOL ;
            echo "2. Hapus Todo " . PHP_EOL ;
            echo "X. Keluar " . PHP_EOL;

            $pilihan = InputHelper::input("Pilih");
            if ($pilihan ==  "1"){ 
               $this->addTodolist();
            }else if ($pilihan == "2"){
               $this->removeTodolist();
            }else if ($pilihan == "x"){
               break;
            }else {
               echo "Pilihan tidak di mengerti" . PHP_EOL;
            }
         }
         echo "Terima Kasih \nSampai jumpa lagi". PHP_EOL;
      }
      function addTodolist(): void
      {
         echo "Memambah Todo";
         $todo = InputHelper::input(" Todo (x untuk batal)");

         if ($todo == "x" ){
            echo "anda Membatalkannya". PHP_EOL;
         }else {
            $this->todolistService->addTodolist($todo);
         }
         
      }

      function removeTodolist(): void
      {
         echo "Menghapus Todolist" . PHP_EOL;

         $pilihan = InputHelper::input("Nomor (x untuk batal)");
         
         if($pilihan == "x"){
            echo "batal menghapus todo". PHP_EOL;
         }else{
            $this->todolistService->removeTodolist($pilihan);
         }
      }
   }
}

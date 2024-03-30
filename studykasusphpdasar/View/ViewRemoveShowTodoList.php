<?php

require_once "../Helper/Input.php";
require_once "../BussinesLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
   echo "Menghapus Todolist";

   $pilihan = input("Nomor (x untuk batal)");
   
   if($pilihan == "x"){
      echo "batal menghapus todo";
   }else{
      $success = removeTodolist($pilihan);

      if($success){
         echo "Sukses menghapus nomor $pilihan";
      }else {
         echo "Gagal menghapus nomor $pilihan";
      }
   }

}
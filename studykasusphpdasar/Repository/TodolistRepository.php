<?php

namespace Repository{

   use Entity\Todolist;
   interface TodolistRepository{
      function save(Todolist $todolist):void;
      function remove(int $number): bool;
      function findAll(): array;
   }

   class TodolistRepositoryImpl implements TodolistRepository{
      public array $todolist = array();
      private \PDO $connection;
      public function __construct(\PDO $connection)
      {
         $this->connection = $connection;
      }

      function save(Todolist $todolist):void
      { 
         // $number = sizeof($this->todolist) + 1;
         // $this->todolist[$number] = $todolist ;
         $sql = "insert into todolist(todo) values(?)";
         $statement = $this->connection->prepare($sql);
         $statement->execute([$todolist->getTodo()]);
      }

      function remove(int $number):bool
      {
         // if ($number > sizeof($this->todolist)){
         //    return false;
         // }
         // for ($i = $number; $i < sizeof($this->todolist); $i++){
         //         $this->todolist[$i] = $this->todolist[$i +  1];
         // }
         // unset($this->todolist[sizeof($this->todolist)]);
         // return true;

         $sql =" select id from todolist where id = ?";
         $statement = $this->connection->prepare($sql);
         $statement->execute([$number]);

         if($statement->fetch()){
            // todolist ada
         $sql = "delete from todolist where id = ?";
         $statement = $this->connection->prepare($sql);
         $statement->execute([$number]);

         return true;
      
         }else {
            // todolist tidak ada
            return false;
         }
      }
      function findAll(): array
      {
         // return $this->todolist;
         $sql = "select id, todo from todolist";
         $statement = $this->connection->prepare($sql);
         $statement->execute();

         $result = [];

         foreach($statement as $row){
            $todolist = new Todolist();
            $todolist->setId($row["id"]);
            $todolist->setTodo($row["todo"]);
            $result[] = $todolist;
         }

         return $result;
      }
   }
}
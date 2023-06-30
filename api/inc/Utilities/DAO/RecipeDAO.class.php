<?php

class RecipeDAO {
   private static $db;

   public static function startDb() {
      self::$db = new PDOAgent("Recipe");
   }

   public static function getAllRecipes(){
      $sql = "SELECT * FROM recipes";

      self::$db->query($sql);
      self::$db->execute();

      return self::$db->resultSet();
   }

}
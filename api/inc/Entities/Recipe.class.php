<?php

class Recipe implements JsonSerializable {
   private int $recipeId;
   private string $recipe_name;
   private string $prep_time;
   private string $cook_time;
   private string $total_time;
   private string $servings;
   private string $yield;
   private string $ingredients;
   private string $directions;
   private string $rating;
   private string $url;
   private string $nutrition;
   private string $timing;
   private string $img_src;


   public function jsonSerialize() {
      return [
         'recipeId' => $this->recipeId,
         'recipe_name' => $this->recipe_name,
         'prep_time' => $this->prep_time,
         'cook_time' => $this->cook_time,
         'total_time' => $this->total_time,
         'servings' => $this->servings,
         'yield' => $this->yield,
         'ingredients' => $this->ingredients,
         'directions' => $this->directions,
         'rating' => $this->rating,
         'url' => $this->url,
         'nutrition' => $this->nutrition,
         'timing' => $this->timing,
         'img_src' => $this->img_src,
     ];
  }

   /**
    * Get the value of recipeId
    */ 
   public function getRecipeId()
   {
      return $this->recipeId;
   }

   /**
    * Set the value of recipeId
    *
    * @return  self
    */ 
   public function setRecipeId($recipeId)
   {
      $this->recipeId = $recipeId;

      return $this;
   }

   /**
    * Get the value of recipe_name
    */ 
   public function getRecipe_name()
   {
      return $this->recipe_name;
   }

   /**
    * Set the value of recipe_name
    *
    * @return  self
    */ 
   public function setRecipe_name($recipe_name)
   {
      $this->recipe_name = $recipe_name;

      return $this;
   }

   /**
    * Get the value of prep_time
    */ 
   public function getPrep_time()
   {
      return $this->prep_time;
   }

   /**
    * Set the value of prep_time
    *
    * @return  self
    */ 
   public function setPrep_time($prep_time)
   {
      $this->prep_time = $prep_time;

      return $this;
   }

   /**
    * Get the value of cook_time
    */ 
   public function getCook_time()
   {
      return $this->cook_time;
   }

   /**
    * Set the value of cook_time
    *
    * @return  self
    */ 
   public function setCook_time($cook_time)
   {
      $this->cook_time = $cook_time;

      return $this;
   }

   /**
    * Get the value of total_time
    */ 
   public function getTotal_time()
   {
      return $this->total_time;
   }

   /**
    * Set the value of total_time
    *
    * @return  self
    */ 
   public function setTotal_time($total_time)
   {
      $this->total_time = $total_time;

      return $this;
   }

   /**
    * Get the value of servings
    */ 
   public function getServings()
   {
      return $this->servings;
   }

   /**
    * Set the value of servings
    *
    * @return  self
    */ 
   public function setServings($servings)
   {
      $this->servings = $servings;

      return $this;
   }

   /**
    * Get the value of yield
    */ 
   public function getYield()
   {
      return $this->yield;
   }

   /**
    * Set the value of yield
    *
    * @return  self
    */ 
   public function setYield($yield)
   {
      $this->yield = $yield;

      return $this;
   }

   /**
    * Get the value of ingredients
    */ 
   public function getIngredients()
   {
      return $this->ingredients;
   }

   /**
    * Set the value of ingredients
    *
    * @return  self
    */ 
   public function setIngredients($ingredients)
   {
      $this->ingredients = $ingredients;

      return $this;
   }

   /**
    * Get the value of directions
    */ 
   public function getDirections()
   {
      return $this->directions;
   }

   /**
    * Set the value of directions
    *
    * @return  self
    */ 
   public function setDirections($directions)
   {
      $this->directions = $directions;

      return $this;
   }

   /**
    * Get the value of rating
    */ 
   public function getRating()
   {
      return $this->rating;
   }

   /**
    * Set the value of rating
    *
    * @return  self
    */ 
   public function setRating($rating)
   {
      $this->rating = $rating;

      return $this;
   }

   /**
    * Get the value of url
    */ 
   public function getUrl()
   {
      return $this->url;
   }

   /**
    * Set the value of url
    *
    * @return  self
    */ 
   public function setUrl($url)
   {
      $this->url = $url;

      return $this;
   }

   /**
    * Get the value of nutrition
    */ 
   public function getNutrition()
   {
      return $this->nutrition;
   }

   /**
    * Set the value of nutrition
    *
    * @return  self
    */ 
   public function setNutrition($nutrition)
   {
      $this->nutrition = $nutrition;

      return $this;
   }

   /**
    * Get the value of timing
    */ 
   public function getTiming()
   {
      return $this->timing;
   }

   /**
    * Set the value of timing
    *
    * @return  self
    */ 
   public function setTiming($timing)
   {
      $this->timing = $timing;

      return $this;
   }

   /**
    * Get the value of img_src
    */ 
   public function getImg_src()
   {
      return $this->img_src;
   }

   /**
    * Set the value of img_src
    *
    * @return  self
    */ 
   public function setImg_src($img_src)
   {
      $this->img_src = $img_src;

      return $this;
   }
}
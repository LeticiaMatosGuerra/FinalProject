<?php

include_once("../../../inc/config.inc.php");
include_once("../../../inc/Utilities/PDOAgent.class.php");
include_once("../../../inc/Utilities/DAO/RecipeDAO.class.php");
include_once("../../../inc/Entities/Recipe.class.php");

RecipeDAO::startDb();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,HEAD,OPTIONS,POST,PUT,DELETE");
header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER["REQUEST_METHOD"];


switch($method) {
   case "GET":
      echo json_encode(
         RecipeDAO::getAllRecipes()
      );
      break;

   case "POST":

      break;
}
<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Bookmark.class.php");
require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/BookmarkDAO.class.php");
require_once("./inc/Utilities/BookmarkConverter.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
    case "POST":
        $data = json_decode(file_get_contents('php://input'));
        $response = new stdClass;
        $response->success = false;
        $response->message = "Bookmark failed";
        $response->sessionToken = null;
        BookmarkDAO::startDb();
        $bookmarkList = BookmarkDAO::getBookmarkByUserId($data->userId);
        if(isset($bookmarkList)) {
            session_start();
            $response->success = true;
            $response->message = "Bookmark success - PHP";
            $response->sessionToken = session_id();
            $userBookmarksList = BookmarkConverter::convertToStd($bookmarkList);
            $response->bookmarksList = $userBookmarksList;
            $response->session = $_SESSION;  
        }
        echo json_encode($response);
        break;
}

<?php

class BookmarkDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOAgent("Bookmark");
    }

    public static function insertBookmark(Bookmark $newBookmark) {
        $sql = "INSERT INTO bookmaiks(userId, recipeId) VALUES (:userId, :recipeId)";

        self::$db->query($sql);

        self::$db->bind(":userId",$newBookmark->getuserId());
        self::$db->bind(":recipeId",$newBookmark->getrecipeId());

        self::$db->execute();

        return self::$db->lastInsertedId();
    }

    static function getBookmarkByUserId(int $userId)  {
        $sql = "SELECT * FROM bookmarks WHERE userId=:userId";

        self::$db->query($sql);

        self::$db->bind(":userId",$userId);

        self::$db->execute();
      
        return self::$db->resultSet();
    }
}
<?php

class BookmarkDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOAgent("User");
    }
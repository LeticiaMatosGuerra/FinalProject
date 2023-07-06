<?php

class Bookmark {

    private int $bookmarkId;
    private int $recipeId;
    private int $userId;
    

    public function getbookmarkId() {
        return $this->bookmarkId;
    }

    public function setbookmarkId($bookmarkId) {
        $this->bookmarkId = $bookmarkId;
    }

    public function getrecipeId() {
        return $this->recipeId;
    }

    public function setrecipeId($recipeId) {
        $this->recipeId = $recipeId;
    }

    
    public function getuserId() {
        return $this->userId;
    }

    public function setuserId($userId) {
        $this->userId = $userId;
    }

}

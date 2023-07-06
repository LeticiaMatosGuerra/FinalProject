<?php

class Bookmark {

    private int $bookmarkId;
    private int $recipeId;
   

    private int $userId;
    private string $userName;
    private string $email;
    private string $password;
    private string $userPicture;

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
}

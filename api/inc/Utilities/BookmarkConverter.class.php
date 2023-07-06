<?php

class BookmarkConverter {

    public static function convertToStd($bookmark) {
        if ( ! is_array($bookmark) ) {
            $stdObject = new stdClass;
            $stdObject->bookmarkId = $bookmark->getbookmarkId();
            $stdObject->recipeId = $bookmark->getrecipeId();
            $stdObject->userId = $bookmark->getuserId();
            
            return $stdObject;
        } else {
            $stdObjectList = [];
            foreach($bookmark as $newBookmark) {
                $stdObject = new stdClass;
                $stdObject->bookmarkId = $newBookmark->getbookmarkId();
                $stdObject->recipeId = $newBookmark->getrecipeId();
                $stdObject->userId = $newBookmark->getuserId();
                $stdObjectList[] = $stdObject;
            }
            return $stdObjectList;
        }
    }
}

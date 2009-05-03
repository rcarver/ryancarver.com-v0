<?php
  class Gallery {

    function Gallery($dir, $index) {
      $this->dir = $dir;
      $this->photos = $this->getPhotos($dir);
      $this->index = $this->findIndex($index, $this->photos);
    }

    function getPhotos($dir) {
      $files = scandir($dir);
      $photos = array();
      foreach ($files as $file) {
        if ($file[0] != '.') {
          array_push($photos, $file);
        }
      }
      return $photos;
    }
    
    function getPhoto() {
      return $this->dir . '/' . $this->photos[$this->index];
    }

    function getIndex() {
      return $this->index;
    }

    function getMaxIndex() {
      return sizeof($this->photos) - 1;
    }

    function getNextIndex() {
      $next_photo_index = $this->index + 1;
      return ($next_photo_index > $this->getMaxIndex()) ? 0 : $next_photo_index;
    }

    function getPrevIndex() {
      $prev_photo_index = $this->index - 1;
      return ($prev_photo_index < 0) ? $this->getMaxIndex() : $prev_photo_index;
    }

    function findIndex($index, $photos) {
      if ($index == null) {
        return 0; //rand(0, $this->getMaxIndex());
      } else {
        return intval($index);
      }
      if ($index > sizeof($photos)) {
        return 0;
      }
    }
  }
?>

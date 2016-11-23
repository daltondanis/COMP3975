<?php

namespace App;


class Listing
{
    private $courseId;
    private $price;
    private $courseName;
    private $image;
    private $noteId;

    public function __construct($crsId, $price, $crsName, $image, $noteId = null) {
        $this->courseId    = $crsId;
        $this->price       = $price;
        $this->courseName  = $crsName;
        $this->image       = $image;
        $this->noteId      = $noteId;
    }

    public function __get($property) {
        return $this->$property;
    }

    public function __set($property, $value) {
        $this->$property = $value;
    }

    public function hasImage() {
        if ($this->image === null) {
            return false;
        }
        return true;
    }
}
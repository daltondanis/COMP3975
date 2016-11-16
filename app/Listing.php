<?php

namespace App;


class Listing
{
    private $courseId;
    private $price;
    private $courseName;
    private $image;

    public function __construct($crsId, $price, $crsName, $image = null)
    {
        $this->courseId    = $crsId;
        $this->price       = $price;
        $this->courseName  = $crsName;
        $this->image       = $image;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public function hasImage() {
        if ($this->image === null) {
            return false;
        }
        return true;
    }
}
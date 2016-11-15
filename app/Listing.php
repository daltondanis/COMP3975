<?php

namespace App;


class Listing
{
    private $image;
    private $courseId;
    private $price;
    private $courseName;

    public function __construct($image, $crsId, $price, $crsName)
    {
        $this->image       = $image;
        $this->courseId    = $crsId;
        $this->price       = $price;
        $this->courseName  = $crsName;
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

}
<?php
namespace ipushs\Push;

class Base {

    private $push = array();

    public function __construct($element = null)
    {
        $this->push[] = $element;
    }

    public function getPush()
    {
        return $this->push;
    }

    public function addPush($element)
    {
        $this->push[] = $element;
    }
}
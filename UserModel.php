<?php

class UserModel {

    public $name;

    public function __construct(Request $request) {
        $this->name = $request->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

}
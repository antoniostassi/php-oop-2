<?php

class Category {
    private $name;
    public $icon;

    public function __construct(String $name, String $icon) {
        $this->name = $name;
        $this->icon = $icon;
    }

    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }
}
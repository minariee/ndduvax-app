<?php

class ParentObject {
    public function run() {
        echo "hello I am parent";
    }
}

class ChildObject extends ParentObject {
    public function greet() {
        echo "I am child function";
    }

    public function run() {
        echo $this->greet().' a message from my parent: ';
        parent::run();
    }
}

$obj = new ChildObject();
$obj->run();
<?php

require '../vendor/phpunit/phpunit/PHPUnit/Autoload.php';

require '../BasicClass.php';


class BasicTests extends PHPUnit_Framework_TestCase{

    public function testsSimpleCase(){

        $obj = new BasicClass();

        $this->assertEquals(true,$obj->getTrue());
    }



}
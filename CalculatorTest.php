<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalculatorTest
 *
 * @author User
 */
require_once "Calculator.php";
class CalculatorTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    protected $object;

    public function setUp() {
      $this->object = new Calculator;
    }

    public function tearDown() {
       
    }

    protected $url = 'http://www.netbeans.org/';

    public function testAdd() {
        $this->assertEquals(4,$this->object->add(2,2));
    }

}

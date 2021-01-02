<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signupTest
 *
 * @author User
 */
class signupTest extends PHPUnit_Framework_TestCase {

    /**
     * @var \RemoteWebDriver
     */
    protected $webDriver;

    public function setUp() {
      $this->object = new Signup1;
    }

    public function tearDown() {
        $this->webDriver->close();
    }

    protected $url = 'http://www.netbeans.org/';

    public function testprint() {
        $this->assertEquals("successful",$this->object->print());
}

}

<?php
namespace Tools\Test\TestCase\Controller;

use Cake\Controller\ComponentRegistry;
use Shim\Controller\Component\Component;
use Cake\Controller\Component\CommonComponent;
use Cake\Core\Configure;
use Cake\Network\Request;
use Cake\Network\Session;
use Tools\TestSuite\TestCase;
use Tools\Controller\Controller;

/**
 */
class ControllerTest extends TestCase {

	public $Controller;

	public function setUp() {
		parent::setUp();

		Configure::write('App.namespace', 'TestApp');

		$this->Controller = new Controller();
		$this->Controller->startupProcess();
	}

	public function tearDown() {
		parent::tearDown();

		unset($this->Controller);
	}

}

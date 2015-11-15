<?php /* Developed by Eis */

require_once __DIR__ . '/../src/User.php';

class UserTest extends PHPUnit_Framework_TestCase {

    protected $_user;

    public function setUp() {
        $this->_user = new \Testing\User('Charles');
    }

    public function tearDown() {

    }

    public function testGetName() {
        $this->assertEquals($this->_user->getName(), 'Charles');
    }

    public function testGetRoles() {
        $this->assertEquals($this->_user->getRoles(), array('Admin'));
    }
}


<?php /* Developed by Eis */

namespace Testing;

class User {

    protected $_name;
    protected $_roles;

    public function __construct($name) {
        
        $this->_roles = array('Admin');
        $this->_name = $name;
    }

    public function getName() {

        return $this->_name;
    }

    public function getRoles() {

        return $this->_roles;
    }

}

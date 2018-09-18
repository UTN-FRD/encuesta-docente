<?php
class EWebUser extends CWebUser{

protected $_model;

function isAdmin(){
    $user = $this->loadUser();
    if ($user)
       return !($user->parent_id==LevelLookUp::MEMBER);
    return false;
}
    
// Load user model.
protected function loadUser()
{
    if ( $this->_model === null ) {
            $this->_model = Users::model()->findByPk( $this->id );
    }
    return $this->_model;
}
}
?>
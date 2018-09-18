<?php

/* https://www.yiiframework.com/doc/guide/1.1/es/topics.console */

    public static function insertUser($new_user, $new_pass, $new_full_name, $parent_user, $new_email)
    {
        $oUser = new self;
        $oUser->users_name = $new_user;
        $oUser->setPassword($new_pass);
        $oUser->full_name = $new_full_name;
        $oUser->parent_id = $parent_user;
        $oUser->lang = 'auto';
        $oUser->email = $new_email;
        if ($oUser->save()) {
            return $oUser->uid;
        } else {
            return false;
        }
    }


    /**
     * Set user password with hash
     *
     * @param string $sPassword The clear text password
     * @return \User
     */
    public function setPassword($sPassword, $save = false)
    {
        $this->password = password_hash($sPassword, PASSWORD_DEFAULT);
        if ($save) {
            $this->save();
        }
        return $this; // Return current object
    }

?>
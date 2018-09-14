<?php
 class LevelLookUp{
      const MEMBER = 9999;
    //  const ADMIN  = 0;
      // For CGridView, CListView Purposes
      public static function getLabel( $level ){
          if($level == self::MEMBER)
             return 'Member';
          if($level == self::ADMIN)
             return 'Administrator';
          return false;
      }
      // for dropdown lists purposes
      public static function getLevelList(){
          return array(
                 self::MEMBER=>'Member',
                 self::ADMIN=>'Administrator');
    }
}
?>
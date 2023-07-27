<?php
namespace Luohonen\TaobaoSdk\Ability382\Domain;

class TaobaoTbkDgVegasSendStatusMapData {

    /**
        若该用户当前无待核销的红包，则返回1，若当前有待核销的红包，则返回0
     **/
    public $is_new_user;


    public function getIsNewUser() : string{
        return $this->is_new_user;
    }

    public function setIsNewUser(string $isNewUser){
        $this->is_new_user = $isNewUser;
    }


}


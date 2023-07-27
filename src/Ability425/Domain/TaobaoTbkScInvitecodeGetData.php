<?php
namespace Luohonen\TaobaoSdk\Ability425\Domain;

class TaobaoTbkScInvitecodeGetData {

    /**
        邀请码
     **/
    public $inviter_code;


    public function getInviterCode() : string{
        return $this->inviter_code;
    }

    public function setInviterCode(string $inviterCode){
        $this->inviter_code = $inviterCode;
    }


}


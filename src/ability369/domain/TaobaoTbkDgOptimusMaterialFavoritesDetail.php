<?php
namespace Luohonen\TaobaoSdk\Ability369\Domain;

class TaobaoTbkDgOptimusMaterialFavoritesDetail {

    /**
        选品库id
     **/
    public $favorites_id;

    /**
        选品库标题
     **/
    public $favorites_title;


    public function getFavoritesId() : int{
        return $this->favorites_id;
    }

    public function setFavoritesId(int $favoritesId){
        $this->favorites_id = $favoritesId;
    }

    public function getFavoritesTitle() : string{
        return $this->favorites_title;
    }

    public function setFavoritesTitle(string $favoritesTitle){
        $this->favorites_title = $favoritesTitle;
    }


}


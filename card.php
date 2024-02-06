<?php

class e_commerce
{

    private $nameproduct;
    private $priceproduct;
    private $typeOfArticle;

    public function __construct($nameproduct, $priceproduct, $typeOfArticle)
    {
        $this->setNameProduct($nameproduct);
        $this->setPriceproduct($priceproduct);
        $this->setTypeOfArticle($typeOfArticle);
    }

    public function setNameProduct($nameproduct)
    {
        return $this->nameproduct;
    }

    public function setPriceproduct($priceproduct)
    {
        return $this->priceproduct;
    }

    public function setTypeOfArticle($typeOfArticle)
    {
        return $this->typeOfArticle = $typeOfArticle;
    }


}

/* var_dump($cardProduct); */


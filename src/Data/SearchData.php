<?php


namespace App\Data;


use App\Entity\Category;
use Symfony\Component\Validator\Constraints as Assert;

class SearchData
{
    /**
     * @var string
     *
     */
    public $q = "";

    /**
     * @var Category[]
     */
    public $categories = [];

    /**
     * @var null|integer
     * @Assert\LessThan(propertyPath="max")
     */
    public $min;

    /**
     * @var null|integer
     */
    public $max;

    /**
     * @var bool
     */
    public $promo = false;

}
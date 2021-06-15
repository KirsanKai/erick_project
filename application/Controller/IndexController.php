<?php


namespace App\Controller;


use App\Model\IndexModel;

class IndexController
{

    private IndexModel $indexModel;

    public function __construct()
    {
        $this->indexModel = new IndexModel();
    }

    public function action(): void
    {

    }

}
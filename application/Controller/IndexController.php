<?php


namespace App\Controller;


use App\Model\IndexModel;

class IndexController
{

    private IndexModel $indexModel;
    private string $pageHTML = '/application/View/index.html';

    public function __construct()
    {
        $this->indexModel = new IndexModel();
    }

    public function action(): void
    {
        include $_SERVER['DOCUMENT_ROOT'] . $this->pageHTML;
    }

}
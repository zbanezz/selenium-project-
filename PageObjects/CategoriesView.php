<?php

namespace Tests\PageObjects;

use Facebook\WebDriver\WebDriverBy;

class CategoriesView
{
    public string $url = 'category/view/';
    public WebDriverBy $createNewButton;
    public WebDriverBy $statusSelect;
    public WebDriverBy $tenantSelect;
    public WebDriverBy $parentCategorySelect;
    public WebDriverBy $titleInput;
    public WebDriverBy $slugInput;
    public WebDriverBy $saveButton;
    public WebDriverBy $searchButton;
    public WebDriverBy $deleteIcon;


    public function __invoke() {
        $this->createNewButton = WebDriverBy::id('createNew');
        $this->statusSelect = WebDriverBy::id('statusSelect');
        $this->tenantSelect = WebDriverBy::id('tenantSelect');
        $this->parentCategorySelect = WebDriverBy::id('categorySelect');
        $this->titleInput = WebDriverBy::id('title');
        $this->slugInput = WebDriverBy::id('slug');
        $this->saveButton = WebDriverBy::id('submitButton');
        $this->searchButton = WebDriverBy::name('search');
        $this->deleteIcon = WebDriverBy::className('deleteEntity');


        return $this;
    }


}
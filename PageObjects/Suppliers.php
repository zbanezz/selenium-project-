<?php

namespace Tests\PageObjects;

use Facebook\WebDriver\WebDriverBy;

class Suppliers
{
    public string $url = 'supplier/view/';
    public WebDriverBy $createNewButton;
    public WebDriverBy $nameInput;
    public WebDriverBy $codeInput;
    public WebDriverBy $skuPrefixInput;
    public WebDriverBy $statusSelect;
    public WebDriverBy $feedTypeSelect;
    public WebDriverBy $feedSourceInput;
    public WebDriverBy $feedUsernameInput;
    public WebDriverBy $feedPasswordInput;
    public WebDriverBy $submitButton;


    public function __invoke() {
        $this->createNewButton = WebDriverBy::id('createNew');
        $this->nameInput = WebDriverBy::name('name');
        $this->codeInput = WebDriverBy::name('code');
        $this->skuPrefixInput = WebDriverBy::name('skuPrefix');
        $this->statusSelect = WebDriverBy::name('status');
        $this->feedTypeSelect = WebDriverBy::name('sourceType');
        $this->feedSourceInput = WebDriverBy::name('feedSource');
        $this->feedUsernameInput = WebDriverBy::name('feedUsername');
        $this->feedPasswordInput = WebDriverBy::name('feedPassword');
        $this->submitButton = WebDriverBy::cssSelector('.btn.btn-success.submitButtonSize');

        return $this;
    }


}
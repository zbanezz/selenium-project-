<?php

namespace Tests\PageObjects;

use Facebook\WebDriver\WebDriverBy;

class Login
{

    public string $url = 'login/loginForm/';
    public WebDriverBy $emailInput;
    public WebDriverBy $passwordInput;
    public WebDriverBy $submitButton;


    public function __invoke() {
        $this->emailInput = WebDriverBy::name('email');
        $this->passwordInput = WebDriverBy::name('password');
        $this->submitButton = WebDriverBy::cssSelector('.btn.btn-lg.btn-primary.btn-block');



        return $this;
    }

}

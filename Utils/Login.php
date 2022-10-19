<?php

namespace Tests\Utils;
use Facebook\WebDriver\WebDriver;


class Login
{
    /**
     * @throws \Facebook\WebDriver\Exception\NoSuchElementException
     * @throws \Facebook\WebDriver\Exception\TimeoutException
     */
    public static function loginValidAdminUser(WebDriver $webDriver, UtilFunctions $util, $config)
    {
        $loginPage = (new \Tests\PageObjects\Login())();
        $webDriver->get($config['baseUrl']);
        $util->fillInput($webDriver->findElement($loginPage->emailInput), $config['validAdminUser']['email']);
        $util->fillInput($webDriver->findElement($loginPage->passwordInput), $config['validAdminUser']['password']);
        $webDriver->findElement($loginPage->submitButton)->click();
    }


}


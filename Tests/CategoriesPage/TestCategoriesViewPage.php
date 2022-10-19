<?php

use Facebook\WebDriver\WebDriverBy;
use Tests\PageObjects\CategoriesView;
use Tests\Setup\Setup;
use Tests\Utils\Login;

class TestCategoriesViewPage extends Setup
{

    /**
     * @throws \Facebook\WebDriver\Exception\NoSuchElementException
     * @throws \Facebook\WebDriver\Exception\TimeoutException
     */

    public function testCreateNewCategoryWithValidCredentials() {
        $categoriesViewPage = (new CategoriesView())();
        Login::loginValidAdminUser($this->webDriver, $this->util, $this->config);
        $this->webDriver->get($this->baseUrl.$categoriesViewPage->url);
        $this->webDriver->findElement($categoriesViewPage->createNewButton)->click();
        $this->util->select($this->webDriver->findElement($categoriesViewPage->statusSelect), 'Inactive');
        $this->util->select($this->webDriver->findElement($categoriesViewPage->tenantSelect), 'test tenant');
        $this->util->fillInput($this->webDriver->findElement($categoriesViewPage->titleInput), 'seleniumTest');
        $this->util->fillInput($this->webDriver->findElement($categoriesViewPage->slugInput), 'selenium');
        $this->webDriver->findElement($categoriesViewPage->saveButton)->click();

        $message = $this->webDriver->findElement(WebDriverBy::cssSelector('.alert.alert-success'));
        $this->assertEquals('Category created successfully.', $message->getText());
        $this->assertEquals('test url', $this->webDriver->getCurrentURL());

        $this->util->fillInput($this->webDriver->findElement($categoriesViewPage->searchButton), 'seleniumTest');
        sleep(1);
        $this->webDriver->findElement($categoriesViewPage->deleteIcon)->click();
        sleep(2);
        $message2 = $this->webDriver->findElement(WebDriverBy::cssSelector('.alert.alert-success'));
        $this->assertEquals('Category deleted successfully.', $message2->getText());
        $this->assertEquals('test url', $this->webDriver->getCurrentURL());


    }

}
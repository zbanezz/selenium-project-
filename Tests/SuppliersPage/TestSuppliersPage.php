<?php

use Tests\PageObjects\Suppliers;
use Tests\Setup\Setup;
use Tests\Utils\Login;

class TestSuppliersPage extends Setup
{
    /**
     * @throws \Facebook\WebDriver\Exception\NoSuchElementException
     * @throws \Facebook\WebDriver\Exception\TimeoutException
     */

    public function testCreateNewSupplierWithValidCredentials() {
        $supplierPage = (new Suppliers())();
        Login::loginValidAdminUser($this->webDriver, $this->util, $this->config);
        $this->webDriver->get($this->baseUrl.$supplierPage->url);
        $this->webDriver->findElement($supplierPage->createNewButton)->click();
        $this->util->fillInput($this->webDriver->findElement($supplierPage->nameInput), "seleniumTest");
        $this->util->fillInput($this->webDriver->findElement($supplierPage->codeInput), '123456');
        $this->util->fillInput($this->webDriver->findElement($supplierPage->skuPrefixInput), 'sttests');
        $this->util->select($this->webDriver->findElement($supplierPage->statusSelect), 'Inactive');
        $this->util->select($this->webDriver->findElement($supplierPage->feedTypeSelect), 'Local');
        $this->util->fillInput($this->webDriver->findElement($supplierPage->feedSourceInput), "seleniumTest");
        $this->util->fillInput($this->webDriver->findElement($supplierPage->feedUsernameInput), "seleniumTest");
        $this->util->fillInput($this->webDriver->findElement($supplierPage->feedPasswordInput), "seleniumTest");
        $this->webDriver->findElement($supplierPage->submitButton)->click();




    }

}
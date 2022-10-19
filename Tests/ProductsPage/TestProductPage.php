<?php

use Facebook\WebDriver\WebDriverBy;
use Tests\PageObjects\Products;
use Tests\Setup\Setup;
use Tests\Utils\Login;
use Tests\Utils\UtilFunctions;

class TestProductPage extends Setup
{
    /**
     * @throws \Facebook\WebDriver\Exception\NoSuchElementException
     * @throws \Facebook\WebDriver\Exception\TimeoutException
     */

    public function testCreateNewProductWithValidCredentials () {
        $productsPage = (new Products())();
        Login::loginValidAdminUser($this->webDriver, $this->util, $this->config);
        $this->webDriver->get($this->baseUrl.$productsPage->url);
        $this->webDriver->findElement($productsPage->createNewButton)->click();
        $this->util->fillInput($this->webDriver->findElement($productsPage->titleInput), 'seleniumTest');
        $this->util->fillInput($this->webDriver->findElement($productsPage->slugInput), 'test');
        sleep(1);
        $utils = new UtilFunctions($this->webDriver);
        $utils->selectLaptopsCheckbox();
        $this->util->select($this->webDriver->findElement($productsPage->statusSelect), 'Private');
        $this->util->fillInput($this->webDriver->findElement($productsPage->inputPriceInput), '100');
        $this->util->fillInput($this->webDriver->findElement($productsPage->priceInput), '150');
        $this->util->fillInput($this->webDriver->findElement($productsPage->salePriceInput), '120');
        $this->util->fillInput($this->webDriver->findElement($productsPage->salePriceFromInput), '12042022');
        $this->util->fillInput($this->webDriver->findElement($productsPage->salePriceToInput), '12052022');
        $this->webDriver->findElement($productsPage->inventoryTab)->click();
        $this->util->select($this->webDriver->findElement($productsPage->supplierSelect), 'test supplier');
        $this->util->select($this->webDriver->findElement($productsPage->stockStatusSelect), 'Instock');
        $this->util->fillInput($this->webDriver->findElement($productsPage->quantityInput), '5');
        $this->util->fillInput($this->webDriver->findElement($productsPage->weightInput), '1');
        $this->util->fillInput($this->webDriver->findElement($productsPage->eanInput), '123456');
        $this->util->fillInput($this->webDriver->findElement($productsPage->barcodeInput), '654654351321');
        $this->util->fillInput($this->webDriver->findElement($productsPage->skuInput), '987456331');
        $this->webDriver->findElement($productsPage->saveButton)->click();

        $message = $this->webDriver->findElement(WebDriverBy::cssSelector('.alert.alert-success'));
        $this->assertEquals('product created successfully.', $message->getText());
        $this->assertEquals('test url', $this->webDriver->getCurrentURL());


        $this->util->fillInput($this->webDriver->findElement($productsPage->searchInput), 'seleniumTest');
        sleep(1);
        $this->webDriver->findElement($productsPage->deleteIcon)->click();
        sleep(2);
        $message2 = $this->webDriver->findElement(WebDriverBy::cssSelector('.alert.alert-success'));
        $this->assertEquals('product deleted successfully.', $message2->getText());
        $this->assertEquals('test url', $this->webDriver->getCurrentURL());





    }

}

//todo URADITI TEST ZA SEARCH !!!!!!!!!!!!!!!!!
//todo URADITI TEST ZA ATRIBUTE !!!!!!!!!!!!!
//todo DODATI DODAVANJE SLIKA
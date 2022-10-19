<?php

namespace Tests\PageObjects;
use Facebook\WebDriver\WebDriverBy;
class Products
{

    public string $url = 'product/view/';
    public WebDriverBy $createNewButton;
    public WebDriverBy $titleInput;
    public WebDriverBy $slugInput;
    public WebDriverBy $dragAddImgInput;
    public WebDriverBy $statusSelect;
    public WebDriverBy $inputPriceInput;
    public WebDriverBy $priceInput;
    public WebDriverBy $salePriceInput;
    public WebDriverBy $salePriceFromInput;
    public WebDriverBy $salePriceToInput;
    public WebDriverBy $inventoryTab;
    public WebDriverBy $supplierSelect;
    public WebDriverBy $stockStatusSelect;
    public WebDriverBy $quantityInput;
    public WebDriverBy $weightInput;
    public WebDriverBy $eanInput;
    public WebDriverBy $barcodeInput;
    public WebDriverBy $skuInput;
    public WebDriverBy $saveButton;
    public WebDriverBy $searchInput;
    public WebDriverBy $deleteIcon;

    public function __invoke() {
        $this->createNewButton = WebDriverBy::id('createNew');
        $this->titleInput = WebDriverBy::name('title');
        $this->dragAddImgInput = WebDriverBy::id('fileInput');
        $this->statusSelect = WebDriverBy::name('status');
        $this->slugInput = WebDriverBy::name('slug');
        $this->inputPriceInput = WebDriverBy::id('inputPrice');
        $this->priceInput = WebDriverBy::id('price');
        $this->salePriceInput = WebDriverBy::id('specialPrice');
        $this->salePriceFromInput = WebDriverBy::id('specialPriceFrom');
        $this->salePriceToInput = WebDriverBy::id('specialPriceTo');
        $this->inventoryTab = WebDriverBy::xpath('//div[@data-target="2"]');
        $this->supplierSelect = WebDriverBy::id('supplierId');
        $this->stockStatusSelect = WebDriverBy::id('stockStatus');
        $this->quantityInput = WebDriverBy::id('quantity');
        $this->weightInput = WebDriverBy::id('weight');
        $this->eanInput = WebDriverBy::id('ean');
        $this->barcodeInput = WebDriverBy::id('barcode');
        $this->skuInput = WebDriverBy::id('sku');
        $this->saveButton = WebDriverBy::id('submitButton');
        $this->searchInput = WebDriverBy::id('search');
        $this->deleteIcon = WebDriverBy::className('deleteEntity');



        return $this;

    }


}



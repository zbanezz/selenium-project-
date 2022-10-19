<?php
namespace Tests\Utils;
use Facebook\WebDriver\WebDriver;
use Facebook\WebDriver\WebDriverElement;
use Facebook\WebDriver\WebDriverSelect;

class UtilFunctions
{

    private WebDriver $webDriver;

    public function __construct($webDriver)
    {
        $this->webDriver = $webDriver;
    }


    public function fillInput(WebDriverElement $element, $value)
    {
        $element->clear();
        $element->sendKeys($value);
    }

    public function clickButton(WebDriverElement $element )
    {
        $element->click();

    }

    public function select(WebDriverElement $element, string $selectValue) {

        $select = new WebDriverSelect($element);
        $select->selectByVisibleText($selectValue);

    }
    public function deleteTR() {


        $js = '
        let deleteButtons = document.querySelectorAll("a");
        deleteButtons.forEach(function(elem,index){
            if(elem.innerText ==="' . 'seleniumTest' .'") {
                let tableRow = elem.parentElement.parentElement;
                tableRow.getElementsByClassName("delete")[0].click();
            }
        });
        ';
        $this->webDriver->executeScript($js);
    }

    public function selectLaptopsCheckbox() {

        $js = '
         let catInputs = document.querySelectorAll(".inputContainer input");
    catInputs.forEach((input) => {
       if(input.parentElement.innerText === " Laptopovi") {
           input.click();
       } 
    });
        ';
        $this->webDriver->executeScript($js);




    }






}
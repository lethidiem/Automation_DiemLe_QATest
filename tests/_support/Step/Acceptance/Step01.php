<?php
namespace Step\Acceptance;
use Page\Acceptance\HomePage as HomePage;
use Page\Acceptance\PageReservation as PageReservation;
class Step01 extends \AcceptanceTester
{
    /**
     * @param $ID
     * @param $number
     * @param $date
     * @param $des
     * @param $time
     * @throws \Exception
     * check if user want to creat new Reservation
     */
     public function creatReservation($ID, $number, $date, $des, $time)
     {
         $I=$this;
         $I->waitForElementVisible(PageReservation::$tableID,30);
         $I->fillField(PageReservation::$tableID, $ID);
         $I->waitForElementVisible(PageReservation::$numberPerson,30);
         $I->fillField(PageReservation::$numberPerson,$number);
         $I->waitForElementVisible(PageReservation::$date,30);
         $I->fillField(PageReservation::$date,$date);
         $I->waitForElementVisible(PageReservation::$description,30);
         $I->fillField(PageReservation::$description, $des);
         $I->waitForElementVisible(PageReservation::$startTime,30);
         $I->fillField(PageReservation::$startTime,$time);
         $I->click(PageReservation::$btnAdd);

     }

    /**
     * check if user use Press key Tab
     */
     public function usePressTab()
     {
         $I=$this;
         $I->amOnPage(PageReservation::$URL2);
         $I->pressKey(PageReservation::$tableID,\Facebook\WebDriver\WebDriverKeys::TAB);
         $I->pressKey(PageReservation::$numberPerson,\Facebook\WebDriver\WebDriverKeys::TAB);
         $I->pressKey(PageReservation::$date,\Facebook\WebDriver\WebDriverKeys::TAB);
         $I->pressKey(PageReservation::$description,\Facebook\WebDriver\WebDriverKeys::TAB);
         $I->pressKey(PageReservation::$startTime,\Facebook\WebDriver\WebDriverKeys::TAB);
     }

    /**
     * @param $ID
     * @param $number
     * @param $date
     * @param $des
     * @param $time
     * @throws \Exception
     * check if user  clear data after enter
     */
     public function clearData($ID, $number, $date, $des, $time)
     {
         $I=$this;
         $I->waitForElementVisible(PageReservation::$tableID,30);
         $I->fillField(PageReservation::$tableID,$ID);
         $I->waitForElementVisible(PageReservation::$numberPerson,30);
         $I->fillField(PageReservation::$numberPerson,$number);
         $I->waitForElementVisible(PageReservation::$date,30);
         $I->fillField(PageReservation::$date,$date);
         $I->waitForElementVisible(PageReservation::$description,30);
         $I->fillField(PageReservation::$description, $des);
         $I->waitForElementVisible(PageReservation::$startTime,30);
         $I->fillField(PageReservation::$startTime,$time);
         $I->click(PageReservation::$clear);
     }

    /**
     * @param $ID
     * @param $number
     * @param $date
     * @param $des
     * @param $time
     * @throws \Exception
     * check if user want to edit data
     */
    public function edit($ID, $number, $date, $des, $time)
    {
        $I=$this;
        $I->click(HomePage::$edit);
        $I->waitForElementVisible(PageReservation::$tableID,30);
        $I->clearField(PageReservation::$tableID);
        $I->fillField(PageReservation::$tableID,$ID);
        $I->waitForElementVisible(PageReservation::$numberPerson,30);
        $I->clearField(PageReservation::$numberPerson);
        $I->fillField(PageReservation::$numberPerson,$number);
        $I->waitForElementVisible(PageReservation::$date,30);
        $I->clearField(PageReservation::$date);
        $I->fillField(PageReservation::$date,$date);
        $I->waitForElementVisible(PageReservation::$description,30);
        $I->clearField(PageReservation::$description);
        $I->fillField(PageReservation::$description,$des);
        $I->waitForElementVisible(PageReservation::$startTime,30);
        $I->clearField(PageReservation::$startTime);
        $I->fillField(PageReservation::$startTime,$time);
        $I->click(PageReservation::$btnAdd);

    }


}
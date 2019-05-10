<?php

namespace Step\Acceptance;
use  Page\Acceptance\HomePage as HomePage;
use Page\Acceptance\PageReservation as PageReservation;

class Step02 extends \AcceptanceTester
{
    /**
     * @throws \Exception
     * goto homepage
     */
    public function checkPage()
    {
        $I=$this;
        $I->amOnPage(HomePage::$URL);
    }

    /**
     * goto page Reservation
     */
    public function Reservation()
    {
        $I=$this;
        $I->amOnPage(PageReservation::$URL2);
    }

    /**
     * sort by ID
     */
    public function sortID()
    {
        $I=$this;
        $I->click(HomePage::$sortID);
        $I->click(HomePage::$sortID);
    }

    /**
     * sort by Type
     */
    public function sortType()
    {
        $I=$this;
        $I->click(HomePage::$sortType);
        $I->click(HomePage::$sortType);
    }

    /**
     * sort by TableID
     */
    public function sortTableID()
    {
        $I=$this;
        $I->click(HomePage::$sortTableID);
        $I->click(HomePage::$sortTableID);
    }

    /**
     * sort by NumberofPerson
     */
    public function sortNumberPerson()
    {
        $I=$this;
        $I->click(HomePage::$sortNumberPerson);
        $I->click(HomePage::$sortNumberPerson);
    }

    /**
     * sort by Date
     */
    public function sortDate()
    {
        $I=$this;
        $I->click(HomePage::$sortDate);
        $I->click(HomePage::$sortDate);
    }

    /**
     * sort by Description
     */
    public function sortDescription()
    {
        $I=$this;
        $I->click(HomePage::$sortDescription);
        $I->click(HomePage::$sortDescription);
    }

    /**
     * sort by Start time
     */
    public function sortStartTime()
    {
        $I=$this;
        $I->click(HomePage::$sortTime);
        $I->click(HomePage::$sortTime);
    }

    /**
     * delete
     */
    public function delete()
    {
        $I=$this;
        $I->click(HomePage::$delete1);
        $I->click(HomePage::$delete1);
        $I->click(HomePage::$delete1);
    }
    public function reload()
    {
        $I=$this;
        $I->click(HomePage::$reloadData);
    }

}
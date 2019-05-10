<?php
use Step\Acceptance\Step01 as Step01;
use Step\Acceptance\Step02 as Step02;

class SortCest
{
    /**
     * @var string
     */
    protected $ID;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $date;
    /**
     * @var string
     */
    protected $des;
    /**
     * @var string
     */
    protected $time;

    public function __construct()
    {
        $this->ID='5';
        $this->number='13';
        $this->date= '10/5/2019';
        $this->des = 'le diem';
        $this->time = '22';
    }

    /**
     * @param Step02 $I
     * @throws Exception
     * check if user want to sort by ID
     */
    public function sortID(Step02 $I)
    {
        $I->checkPage();
        $I->sortID();
    }

    /**
     * @param Step02 $I
     * check if user want to sort by Type
     */
    public function sortType(Step02 $I)
    {
        $I->sortType();
    }

    /**
     * @param Step02 $I
     * @param $scenario
     * check if user want to sort by TableID
     */
    public function sortTableID(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID,$this->number,$this->date,$this->des,$this->time);
        $I=new Step02($scenario);
        $I->sortTableID();
    }

    /**
     * @param Step02 $I
     * @param $scenario
     * check if user want to sort by Number of Person
     */
    public function sortNumberPerson(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID,$this->number,$this->date,$this->des,$this->time);
        $I=new Step02($scenario);
        $I->sortNumberPerson();
    }

    /**
     * @param Step02 $I
     * @param $scenario
     * check if user want to sort by Date
     */
    public function sortDate(Step02 $I,$scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID,$this->number,$this->date,$this->des,$this->time);
        $I=new Step02($scenario);
        $I->sortDate();
    }

    /**
     * @param Step02 $I
     * @param $scenario
     * check if user want to sort by Description
     */
    public function sortDes(Step02 $I,$scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID,$this->number,$this->date,$this->des,$this->time);
        $I=new Step02($scenario);
        $I->sortDescription();
    }

    /**
     * @param Step02 $I
     * @param $scenario
     * check if user want to sort by Start time
     */
    public function sortTime(Step02 $I,$scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID,$this->number,$this->date,$this->des,$this->time);
        $I=new Step02($scenario);
        $I->sortStartTime();
    }

}
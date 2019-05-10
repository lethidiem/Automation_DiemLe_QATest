<?php 
use Step\Acceptance\Step01 as Step01;
use Step\Acceptance\Step02 as Step02;
class CreatFormCest
{
    protected $ID;
    protected $noID;
    protected $invalidID;
    protected $number;
    protected $noNumber;
    protected $date;
    protected $noDate;
    protected $des;
    protected $noDes;
    protected $time;
    protected $noTime;
    protected $invalidTime;

    public function __construct()
    {
        $this->ID='1';
        $this->noID='';
        $this->invalidID='10';
        $this->number='18';
        $this->noNumber='';
        $this->date='5/10/2019';
        $this->noDate='';
        $this->des='diem le';
        $this->noDes ='';
        $this->time='19';
        $this->noTime='';
        $this->invalidTime='10';

    }

    /**
     * @param Step01 $I
     * Check if the user enters the correct input data
     */
    public function creatFormSuccesfull(Step02 $I, $scenario)
    {
        $I->wantToTest('I want to do create new table successfully');
        $I->checkPage();
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID, $this->number, $this->date, $this->des, $this->time);
        $I->comment('Create Successfully');

    }

    /**
     * @param Step01 $I
     * Check if the user enters the incorrect ID
     */
    public function creatFormNoID(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->noID,$this->number, $this->date, $this->des, $this->time);
    }

    /**
     * @param Step01 $I
     * Check if the user enters the incvalid ID
     */
    public function creatFormInvalidID(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->invalidID, $this->number, $this->date, $this->des, $this->time);
    }

    /**
     * @param Step01 $I
     * Check if the user enters the incorrect number
     */
    public function creatFormNoNumber(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID, $this->noNumber, $this->date, $this->des, $this->time);
    }

    /**
     * @param Step01 $I
     * Check if the user enters the incorrect date
     */
    public function creatFormNoDate(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID, $this->number, $this->noDate, $this->des, $this->time);
    }

    /**
     * @param Step01 $I
     * Check if the user enters the incorrect Description
     */
    public function creatFormNoDes(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID, $this->number, $this->date, $this->noDes, $this->time);
    }

    /**
     * @param Step01 $I
     * Check if the user enters the incorrect Time
     */
    public function creatFormNoTime(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID, $this->number, $this->date, $this->des, $this->noTime);
    }

    /**
     * @param Step01 $I
     * Check if the user enters the invalid time
     */
    public function creatFormInvalidTime(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->creatReservation($this->ID, $this->number, $this->date, $this->des, $this->invalidTime);
    }

    /**
     * @param Step02 $I
     * @param $scenario
     * if user click on clear after enter data
     */
    public function clearData(Step02 $I, $scenario)
    {
        $I->Reservation();
        $I=new Step01($scenario);
        $I->clearData($this->ID, $this->number, $this->date, $this->des, $this->invalidTime);
    }
}

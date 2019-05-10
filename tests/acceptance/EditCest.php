<?php
use Step\Acceptance\Step01 as Step01;
use Step\Acceptance\Step02 as Step02;

class EditCest
{
    protected $ID;
    protected $number;
    protected $date;
    protected $des;
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
     * @param $scenario
     * @throws Exception
     * check if user want to edit
     */
    public function edit(Step02 $I, $scenario)
    {
        $I->checkPage();
        $I=new Step01($scenario);
        $I->edit($this->ID, $this->number ,$this->date, $this->des, $this->time);
    }

}
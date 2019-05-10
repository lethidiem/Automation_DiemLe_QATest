<?php
use Step\Acceptance\Step01 as Step01;
use Step\Acceptance\Step02 as Step02;

class PressKeyCest
{
    /**
     * @param Step02 $I
     * @param $scenario
     * check if user press key Tab
     */
    public function usePressKeyTab(Step02 $I, $scenario)
    {
        $I->checkPage();
        $I->Reservation();
        $I=new Step01($scenario);
        $I->usePressTab();
    }
}
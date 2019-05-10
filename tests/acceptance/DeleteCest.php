<?php
use Step\Acceptance\Step01 as Step01;
use Step\Acceptance\Step02 as Step02;

class DeleteCest
{
    /**
     * @param Step02 $I
     * @throws Exception
     * check if user want to delete
     */
    public function delete(Step02 $I)
    {
        $I->checkPage();
        $I->delete();
        $I->wait(3);
    }

}
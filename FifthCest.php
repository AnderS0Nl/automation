<?php 

class FirstCest
{
    public function frontPageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('LIGHTING');
    }

}

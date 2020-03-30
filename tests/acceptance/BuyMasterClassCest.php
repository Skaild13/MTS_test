<?php 

class BuyMasterClassCest
{
    public function buttonClick(AcceptanceTester $I)
    {
        $I->amOnPage('/courses/life-and-work-balance/#tarif');
        $I->maximizeWindow();
        $I->see('Стандартный');
        $I->see('Корпоративный');
        $I->click('Купить');
        $I->fillField('#cu_subscribe_main_2416 > label:nth-child(1) > span > input', 'Test Name');
        $I->fillField('#cu_subscribe_main_2416 > label:nth-child(2) > span > input', '111@111.com');
        $I->checkOption('#cu_subscribe_main_2416 > label.cu-label.wpcf7-acceptance > div.cu-checkbox');
        $I->fillField('/html/body/div[11]/div[2]/div[4]/div/div/div/form/div[2]/label[3]/span/div/input', '1111111111');
     // $I->click('#cu_subscribe_main_2416 > input.wpcf7-form-control.wpcf7-submit.check_rule');
     }
}
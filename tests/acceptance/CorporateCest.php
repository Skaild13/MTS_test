<?php

class CorporateCest
{
    public function buttonClick(AcceptanceTester $I)
    {
        $I->amOnPage('/courses/life-and-work-balance/#tarif');
        $I->maximizeWindow();
        $I->see('Стандартный');
        $I->see('Корпоративный');
        $I->click('Оставить заявку');
        $I->fillField('#cu_subscribe_main_2724 > div:nth-child(1) > label:nth-child(1) > span > input', 'Test Surname');
        $I->fillField('#cu_subscribe_main_2724 > div:nth-child(1) > label:nth-child(2) > span.wpcf7-form-control-wrap.user_name > input', 'Test Name');
        $I->fillField('#cu_subscribe_main_2724 > div:nth-child(2) > label:nth-child(1) > span > input', 'Some company');
        $I->fillField('#cu_subscribe_main_2724 > div:nth-child(2) > label:nth-child(2) > span > input', 'CEO');
        $I->fillField('#cu_subscribe_main_2724 > div:nth-child(3) > label:nth-child(1) > span.wpcf7-form-control-wrap.user_email > input', '111@111.com');
        $I->checkOption('#cu_subscribe_main_2724 > div.wpcf_onerow > label.cu-label.cu-rules.wpcf7-acceptance > div.cu-checkbox');
        $I->fillField('/html/body/div[11]/div[2]/div[4]/div/div/div/form/div[2]/div[3]/label[2]/span[2]/div/input', '1111111111')
        //$I->click('#cu_subscribe_main_2724 > div.wpcf_onerow > input');
    }
}

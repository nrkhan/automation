<?php 
$i = rand(1,1000);
$I = new AcceptanceTester($scenario);
$I->wantTo('Add a New Address');
$I->amOnPage('/login');
$I->fillField('email','dbhayani@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Addresses');
$I->see('Address Management');
$I->click(['class' => 'btn-primary']);
$I->fillField('title','QA '.$i.'Test');  //Need to set fresh data all the time running this test
$I->checkOption(['class' => 'show-hide-details', 'name' => 'is_us']);
$I->fillField('us_company_address','QA US Company Address1');
$I->fillField('us_legal_address','QA US Legal Address1');
$I->fillField('us_return_address','QA US Return Address1');
$I->checkOption(['class' => 'show-hide-details', 'name' => 'is_uk']);
$I->fillField('us_company_address','QA UK Company Address1');
$I->fillField('us_legal_address','QA UK Legal Address1');
$I->fillField('us_return_address','QA UK Return Address1');
$I->checkOption(['class' => 'show-hide-details', 'name' => 'is_tur']);
$I->fillField('us_company_address','QA Tur Company Address1');
$I->fillField('us_legal_address','QA Tur Legal Address1');
$I->fillField('us_return_address','QA Tur Return Address1');
$I->click(['class' => 'btn-primary']);
$I->see('Address added successfully');
$I->click('Logout');
$I->see('Login');
?>
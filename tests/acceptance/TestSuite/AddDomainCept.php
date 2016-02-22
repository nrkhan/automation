<?php 
$i = rand(1,1000);
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/login');
$I->fillField('email','dbhayani@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Domains');
$I->see('COUNTRY');
$I->click(['class' => 'btn-primary']);
$I->fillField('domain', 'http://www.abc'.$i.'.com');  //Need to Change Domain every time run the test case
$I->selectOption('id_marketing_group', 'US Skin');
$I->fillField('merchant', 'Pakistan');
$I->fillField('company', 'eps');
$I->selectOption('country', 'United States');
$I->selectOption('status', 'Active');
$I->click(['class' => 'btn-primary']);
$I->see('Domain added successfully');
$I->click('Logout');
$I->see('Login');
?>


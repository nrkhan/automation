<?php 
$i = rand(1,1000);
$I = new AcceptanceTester($scenario);
$I->wantTo('Add a new Template');
$I->amOnPage('/login');
$I->fillField('email','dbhayani@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Templates');
$I->see('TEMPLATE');
$I->click(['class' => 'btn-primary']);
$I->see('Template');
$I->fillField('name','QA Temp'.$i.'');
$I->attachFile('input[type="file"]', 'fit-rasp-template.zip');
$I->click(['class' => 'btn-primary']);
$I->see('Template added successfully');
$I->click('Logout');
$I->see('Login');
?>
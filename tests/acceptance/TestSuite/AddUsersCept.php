<?php
$i = rand(1,1000);
$I = new AcceptanceTester($scenario);
$I->wantTo('Add New Users In Mids Management');
$I->amOnPage('/login');
$I->fillField('email','dbhayani@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Users');
$I->see('ROLE');
$I->click(['class' => 'btn-primary']);
$I->fillField('name','QA test');
$I->fillField('email','qatest'.$i.'@yopmail.com');  //Need to set fresh data all the time running this test
$I->fillField("password","123456");
$I->selectOption('role', 'Designer');
$I->click(['class' => 'btn-primary']);
$I->see('User added successfully');
$I->click('Logout');
$I->see('Login');
?>	

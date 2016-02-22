<?php 
$I = new AcceptanceTester($scenario);
$i=rand(1,100);
$I->wantTo('Add Pages');
$I->amOnPage('/login');
$I->fillField('email','dbhayani@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Pages');
$I->see('Pages Management');
$I->click(['class' => 'btn-primary']);
$I->see('Pages Management - Add New');
$I->fillField('title','QA'.$i.'');
$I->selectOption('category', '1');
$I->fillField('Content','QA Test1');
$I->click(['class' => 'btn-primary']);
$I->see('Page added successfully');
?>


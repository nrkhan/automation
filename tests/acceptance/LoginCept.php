<?php


$I = new AcceptanceTester($scenario);
$I->wantTo('Sign In');
print 'I';
$I->amOnPage('http://172.16.4.238/HRMS/User/Login');
$I->fillField('CompanyCode', 'EPC');
$I->fillField('UserName', '1026');
$I->fillField('Password', 'test123');

$I->click('Sign in');
//$I->click('Sign in');
//$I->waitForText('Monday - 08 February 2016 ');
$I->see('Muhammad Tariq');
?>
<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check Forgot password Validation with Wrong Email');
$I->amOnPage('http://172.16.3.15:9090/mids/auth/login/');
$I->click('Forgot Your Password?');
$I->fillField('email','hsgasgd@jhgsdh.com');
$I->click(['class' => 'btn-primary']);
$I->see('find a usersdda with that e-mail address.')
?>
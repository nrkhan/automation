<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Check Forgot password Validation with Wrong Email');
$I->amOnPage('/login');
$I->click('Forgot Your Password?');
$I->fillField('email','hsgasgd@jhgsdh.com');
$I->click(['class' => 'btn-primary']);
$I->see('find a user with that e-mail address.')
?>
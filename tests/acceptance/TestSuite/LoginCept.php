<!-- Redirect to another page (for no-js support) (place it in your <head>) -->
<noscript>
<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('log in as regular user');
$I->amOnPage('/login');
$I->fillField('email','dbhayani@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Profile Edit');
$I->click(['class' => 'btn-primary']);
$I->see('Profile updated successfully');
$I->click('Logout');
$I->see('Login');
?>
</noscript> 
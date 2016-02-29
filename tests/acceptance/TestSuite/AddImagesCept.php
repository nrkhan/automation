<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Add a new Image');
$I->amOnPage('/login');
$I->fillField('email','mbilal@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Images');
$I->seeInCurrentUrl('/images');
$I->click(['class' => 'btn-primary']);
$I->see('Upload new images');
$I->selectOption('image_category','2');
$I->attachFile('input[type="file"]', 'banner.jpg');
$I->click('Start upload');
$I->dontSeeElement(['class' => 'btn-danger delete']);
/* $I->click('Images');
$I->seeInCurrentUrl('/images');
$I->click('Logout');
$I->see('Login'); */
?>

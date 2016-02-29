<?php 
$i = rand(1,1000);
$I = new AcceptanceTester($scenario);
$I->wantTo('Add an Image Category');
$I->amOnPage('/login');
$I->fillField('email','mbilal@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Image Categories');
$I->see('Image Categories');
$I->click(['class' => 'btn-primary']);
$I->see('Create Image Category');
$I->fillField('category','QA '.$i.'Cat');  // need to set different valur before evert test run.
$I->click(['class' => 'btn-primary']);
$I->see('Image Category added successfully');
$I->click('Logout');
$I->see('Login');
?>

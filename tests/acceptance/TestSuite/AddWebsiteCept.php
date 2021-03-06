<?php 
$I = new AcceptanceTester($scenario);
$i=rand(1, 1000);
$I->wantTo('Add Website');
$I->amOnPage('/login');
$I->fillField('email','mbilal@eplanetcom.com');
$I->fillField("password","123456");
$I->click(['class' => 'btn-raised']);
$I->seeLink('Logout', '/logout');
$I->click('Websites');
$I->seeInCurrentUrl('/websites');
$I->click(['class' => 'btn-primary']);
$I->see('Basic Details');
$I->selectOption('id_domain','101');   //Need to change Value every time before run
$I->selectOption('id_template', '101');
$I->fillField('campaign_id','595');
$I->fillField('campaign_link','http://www.equinoxdna.com/o23new/direct_billing.php');
$I->fillField('website_title','Equinox DaynNight Serum Trial');
$I->fillField('company_id','1');
$I->fillField('company_name','Equinox DaynNight Serum Trial');
$I->fillField('product_id','4');
$I->fillField('product_name','Equinox DaynNight Serum Trial');
$I->fillField('email','abc'.$i.'@abc.com');
$I->fillField('cancel_order_email','abc'.$i.'@abc.com');
$I->selectOption('id_address', 'QA Address');
$I->selectOption('id_prices', 'QA Price');
$I->checkOption(['class' => 'show-hide-details', 'name' => 'is_us']);
$I->fillField('us_company_name','QA US'.$i.'');
$I->fillField('us_phone_number','12345678901');
$I->selectOption('id_terms', 'QA Terms and Conditions');
$I->selectOption('id_privacy', 'QA Privacy policy');
$I->selectOption('id_ingredients', 'QA Ingredient');
$I->selectOption('id_disclaimer', 'QA Disclaimer');
$I->selectOption('id_billing_note', 'QA Billing Note');
$I->selectOption('id_billing_us', 'QA Billing US');
$I->selectOption('id_billing_uk', 'QA Billing UK');
$I->click(['class' => 'btn-primary']);
$I->see('Website added successfully');
$I->click('Logout');
$I->see('Login');
?>


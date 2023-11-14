<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class LoginContext implements Context
{
    /**
     * @BeforeScenario
     */
    public function before()
    {
        $this->visitPath('https://www.saucedemo.com/v1/');
        $this->getSession()->maximizeWindow();
    }

    /**
     * Given I fill the username field with :username
     * @param $username
     */
    public function fillUsernameField($username)
    {
        $this->fillField('user-name', 'standard_user');
    }

    /**
     * And I fill the password field with :password
     * @param $password
     */
    public function fillPasswordField($password)
    {
        $this->fillField('password', 'secret_sauce');
    }

    /**
     * And I click the login button
     */
    public function clickLoginButton()
    {
        $this->pressButton('LOGIN');
    }

    /**
     * Then I should be redirected to 'https://www.saucedemo.com/v1/inventory.html'
     */
    public function assertLoggedIn()
    {
        $this->assertUrlIs('https://www.saucedemo.com/v1/inventory.html')
    }


}

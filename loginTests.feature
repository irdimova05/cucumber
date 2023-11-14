Feature: Test login

    Scenario: Successful login
        Given I am redirected to {url}
        When I fill the username field with {username}
        And I fill the password field with {password}
        And I click the login button
        Then I should be redirected to {url}

    Scenario: Unsuccessful login
        Given I am redirected to {url}
        When I fill the username field with {username}
        And I fill the password field with {password}
        And I click the login button
        Then I should see text 'Epic sadface: Username and password do not match any user in this service'
<?php

use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

class FeatureContext implements Context
{
    /** @var string */
    private $message;

    /**
     * @When I call it with name :name
     */
    public function iCallItWithName($name)
    {
        $this->message = (new Dummy($name))->hello();
    }

    /**
     * @Then I should see :message
     */
    public function iShouldSee($message)
    {
        Assert::same($message, $this->message);
    }
}

<?php
// features/bootstrap/FeatureContext.php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class FeatureContext implements SnippetAcceptingContext
{
    private $stiv;
    private $blog;
    /**
     * Initializes context.
     */
    public function __construct()
    {
        $this->stiv = new Stive();
    }

    /**
     * @Given there is a stive and i add :arg1
     */
    public function thereIsAStiveAndIAdd($arg1)
    {
        $this->stiv->push($arg1);
    }

    /**
     * @Then I should have :arg1 at top of stive
     */
    public function iShouldHaveAtTopOfStive($arg1)
    {
        PHPUnit_Framework_Assert::assertSame(
            intval($arg1),
            $this->stiv->top()
        );
    }

    /**
     * @When I add number :arg1 to stive
     */
    public function iAddNumberToStive($arg1)
    {
        $this->stiv->push($arg1);
    }

    /**
     * @When I remove an element from stive
     */
    public function iRemoveAnElementFromStive()
    {
        $this->stiv->pop();
    }

    /**
     * @Given there is a blog :arg1
     */
    public function thereIsABlog($arg1)
    {
        $this->blog = new Blog($arg1);
    }

    /**
     * @When I visit this blog
     */
    public function iVisitThisBlog()
    {
        $this->blog->visit();
    }

    /**
     * @Then I should have :arg1
     */
    public function iShouldHave($arg1)
    {
        PHPUnit_Framework_Assert::assertTrue(
            $this->blog->hasContent($arg1)
        );
    }

    /**
     * @When I click :arg1
     */
    public function iClick($arg1)
    {
        $this->blog->click($arg1);
    }

    /**
     * @When I Insert value :arg1 on field :arg2
     */
    public function iInsertValueOnField($arg1, $arg2)
    {
        $this->blog->insert($arg1, $arg2);
    }

    /**
     * @When I submit form :arg1
     */
    public function iSubmitForm($arg1)
    {
        $this->blog->submit($arg1);
    }

}

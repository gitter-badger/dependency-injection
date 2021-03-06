<?php

/**
 * (c) Paulus Gandung Prakosa (rvn.plvhx@gmail.com)
 */

namespace DependencyInjection\Tests\Fixtures;

class Base implements BaseInterface
{
    /**
     * Give this static property for dummy test.
     */
    public static $dummy = 8080;
    
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $middleName;

    /**
     * @var string
     */
    private $lastName;

    public function __construct()
    {
    }
    
    /**
     * {@inheritdoc}
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * {@inheritdoc}
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Unify first name, middle name, and last name into a string.
     */
    public function unify()
    {
        return join(' ', [$this->firstName, $this->middleName, $this->lastName]);
    }
}

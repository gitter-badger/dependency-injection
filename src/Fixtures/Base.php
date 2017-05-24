<?php

/**
 * (c) Paulus Gandung Prakosa (rvn.plvhx@gmail.com)
 */

namespace Experiments\DependencyInjection\Fixtures;

class Base implements BaseInstance
{
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

	public function __toString()
	{
		return $this->unify();
	}
}
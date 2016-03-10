<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace League\OAuth2\Client\Provider;

/**
 * TwitterUser
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class TwitterResourceOwner implements ResourceOwnerInterface
{

	/**
	 * Domain
	 *
	 * @var string
	 */
	protected $domain;

	/**
	 * Raw response
	 *
	 * @var array
	 */
	protected $response;

	/**
	 * @param  mixed[] $response
	 */
	public function __construct(array $response)
	{
		$this->response = $response;
	}

	/**
	 * Get resource owner id
	 *
	 * @return string|null
	 */
	public function getId()
	{
		return $this->response['id'] ? : null;
	}

	/**
	 * Get resource owner email
	 *
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->response['email'] ? : null;
	}

	/**
	 * Get resource owner name
	 *
	 * @return string|null
	 */
	public function getName()
	{
		return $this->response['name'] ? : null;
	}

	/**
	 * Get resource owner nickname
	 *
	 * @return string|null
	 */
	public function getNickname()
	{
		return $this->response['screen_name'] ? : null;
	}

	/**
	 * Get resource owner url
	 *
	 * @return string|null
	 */
	public function getUrl()
	{
		return trim($this->domain . '/' . $this->getNickname()) ? : null;
	}

	/**
	 * Set resource owner domain
	 *
	 * @param  string $domain
	 *
	 * @return TwitterResourceOwner
	 */
	public function setDomain($domain)
	{
		$this->domain = $domain;

		return $this;
	}

	/**
	 * Return all of the owner details available as an array.
	 *
	 * @return array
	 */
	public function toArray()
	{
		return $this->response;
	}

}

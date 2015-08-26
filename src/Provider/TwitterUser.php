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
class TwitterUser implements ResourceOwnerInterface
{

	/**
	 * @var mixed[]
	 */
	protected $data;

	/**
	 * @param  mixed[] $response
	 */
	public function __construct(array $response)
	{
		$this->data = $response;
		if (!empty($response['picture']['data']['url']))
		{
			$this->data['picture_url'] = $response['picture']['data']['url'];
		}
	}

	public function getId()
	{

	}

	public function toArray()
	{

	}

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace League\OAuth2\Client\Provider;

/**
 * Twitter
 *
 * @author Piotr Maselkowski <pmaselkowski at gmail.com>
 */
class Twitter extends AbstractProvider
{

	protected function checkResponse(\Psr\Http\Message\ResponseInterface $response, $data)
	{

	}

	protected function createResourceOwner(array $response, \League\OAuth2\Client\Token\AccessToken $token)
	{

	}

	protected function getDefaultScopes()
	{

	}

	public function getBaseAccessTokenUrl(array $params)
	{

	}

	public function getBaseAuthorizationUrl()
	{

	}

	public function getResourceOwnerDetailsUrl(\League\OAuth2\Client\Token\AccessToken $token)
	{

	}

}

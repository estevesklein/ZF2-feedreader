<?php

namespace DotFeedReader\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

use DotFeedReader\Service\FeedService;

class FeedServiceFactory implements FactoryInterface
{
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$reader = new \Zend\Feed\Reader\Reader;

		$feedService = new FeedService($reader);

		return $feedService;
	}
}
<?php

namespace DotFeedReader\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		$feedService = $this->getServiceLocator()->get('FeedReaderService');
		$feeds = $feedService->getFeeds('http://www.planet-php.net/rdf/');

		return new ViewModel(['feeds'=>$feeds]);
	}
}
<?php

namespace DotFeedReader\Service;

use Zend\Feed\Reader\Reader;

class FeedService
{
	private $reader;

	public function __construct(Reader $reader)
	{
		$this->reader = $reader;
	}

	public function getFeeds($url)
	{

		//$dataXml = \Zend\Feed\Reader\Reader::import($url);

		return $this->reader->import($url);
	}
}
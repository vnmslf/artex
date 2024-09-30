<?php
namespace XmlLoader;

class Import
{
	public $newFile;

	public function load($file)
	{
		$newFile = simplexml_load_file($file);
		return $this->newFile;
	}
}

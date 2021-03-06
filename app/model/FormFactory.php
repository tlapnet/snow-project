<?php declare(strict_types = 1);

namespace App\Model;

use Nette;
use Nette\Application\UI\Form;

class FormFactory
{

	use Nette\SmartObject;

	public function create(): Form
	{
		return new Form();
	}

}

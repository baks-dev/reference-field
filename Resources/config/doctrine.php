<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Core\Type\Field\InputField;
use BaksDev\Core\Type\Field\InputFieldType;

use Symfony\Config\DoctrineConfig;

return static function(DoctrineConfig $doctrine) {
	
	$doctrine->dbal()->type(InputField::TYPE)->class(InputFieldType::class);
};
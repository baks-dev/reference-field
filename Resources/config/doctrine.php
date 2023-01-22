<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Reference\Field\Type\InputField;
use BaksDev\Reference\Field\Type\InputFieldType;

use Symfony\Config\DoctrineConfig;

return static function (DoctrineConfig $doctrine)
{

	$doctrine->dbal()->type(InputField::TYPE)->class(InputFieldType::class);
};
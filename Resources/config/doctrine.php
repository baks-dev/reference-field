<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;


use Symfony\Config\DoctrineConfig;

return static function (DoctrineConfig $doctrine)
{

	$doctrine->dbal()->type(InputField::TYPE)->class(InputFieldType::class);
};
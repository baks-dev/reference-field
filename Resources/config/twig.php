<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Reference\Field\FieldExtension;
use Symfony\Config\TwigConfig;

return static function (ContainerConfigurator $configurator, TwigConfig $config)
{
    $services = $configurator->services()
      ->defaults()
      ->autowire()
      ->autoconfigure()
    ;

	$services->set('reference.field.type.twig.extension')
		->class(FieldExtension::class)
		->tag('twig.extension');
	
	$config->path(__DIR__.'/../view', 'Field');
	
};





<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use BaksDev\Reference\Color\Twig\ColorExtension;
use Symfony\Config\TwigConfig;

return static function (ContainerConfigurator $configurator, TwigConfig $config)
{
    $services = $configurator->services()
      ->defaults()
      ->autowire()      // Automatically injects dependencies in your services.
      ->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
    ;
	

	/** FieldExtension */
	$services->set('field.type.twig.extension')
		->class(FieldExtension::class)
		->tag('twig.extension');
	
	$config->path(__DIR__.'/../view', 'Field');
	
};





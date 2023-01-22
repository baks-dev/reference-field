<?php

namespace BaksDev\Reference\Field\Twig;

use Symfony\Component\Form\FormView;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

final class FieldExtension extends AbstractExtension
{
	public function getFunctions(): array
	{
		return [
			new TwigFunction('render_field', [$this, 'renderField'], ['needs_environment' => true, 'is_safe' => ['html']]),
		];
	}
	
	public function renderField(Environment $twig, string $type, FormView $field): string
    {
        $template = '@Field/'.$type.'.html.twig';
        
        return $twig->render($template, ['field' => $field]);
	}
}
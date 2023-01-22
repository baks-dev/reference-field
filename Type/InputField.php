<?php

namespace BaksDev\Reference\Field\Type;


/** Типы полей */
final class InputField
{
	public const TYPE = 'field_type';
	
	private FieldEnum $field;
	
	public function __construct(string|FieldEnum $type)
	{
		if($type instanceof FieldEnum)
		{
			$this->field = $type;
		}
		else
		{
			$this->field = FieldEnum::from($type);
		}
	}
	
	public function __toString() : string
	{
		return $this->field->value;
	}
	
	public function getValue() : string
	{
		return $this->field->value;
	}
	
	public function getType() : FieldEnum
	{
		return $this->field;
	}
	
	public function getName() : string
	{
		return $this->field->name;
	}
	
	public static function cases() : array
	{
		$case = null;
		
		foreach(FieldEnum::cases() as $local)
		{
			$case[] = new self($local);
		}
		
		return $case;
	}
}
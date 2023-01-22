<?php

namespace BaksDev\Reference\Field\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\StringType;

final class InputFieldType extends StringType
{
    public function convertToDatabaseValue($value, AbstractPlatform $platform) : mixed
    {
        return $value instanceof InputField ? $value->getValue() : (new InputField($value))->getValue();
    }
    
    public function convertToPHPValue($value, AbstractPlatform $platform) : mixed
    {
        return !empty($value) ? new InputField($value) : $value;
    }
    
    public function getName() : string
    {
        return InputField::TYPE;
    }
    
    public function requiresSQLCommentHint(AbstractPlatform $platform) : bool
    {
        return true;
    }
    
}
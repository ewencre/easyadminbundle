<?php

namespace App\EasyAdmin;

use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\FieldTrait;

class VotesField implements FieldInterface
{
    use FieldTrait;

    public static function new(string $propertyName, ?string $label=null)
    {
        return (new self())
            ->setProperty($propertyName)
            ->setLabel($label)
            // used in index and details pages
            ->setTemplatePath('admin/field/votes.html.twig')
            // used in edit and new pages
            ->setFormType(IntegerType::class)
            ->addCssClass('field-integer')
            ->setDefaultColumns('col-md-4 col-xxl-3');
    }
}

<?php

namespace App\Controller\Admin;

use App\Entity\Ksiazki;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class KsiazkiCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Ksiazki::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('title', 'Tytuł'),
            ArrayField::new('authors', 'Autorzy'),
            TextField::new('iban', 'IBAN'),
            ArrayField::new('categories', 'Kategorie'),
            BooleanField::new('cover', 'Twarda oprawa'),
            ArrayField::new('copies', 'Egzemplarze')->onlyOnDetail(),
        ];
    }
}

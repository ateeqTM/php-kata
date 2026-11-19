<?php

// PSR-1 rule 1: only the <?php tag is used

// PSR-1 rules 4 and 5: namespace with a vendor name (Ateeq), matching the folder (PSR-4)
namespace Ateeq\PhpKata\Shop;

// PSR-1 rule 5: one class in this file (file name Cart.php matches the class)
// PSR-1 rule 6: class name is in StudlyCaps
class Cart
{
    // PSR-1 rule 8: method name is in camelCase
    public function hello(): string
    {
        return "Shop cart";
    }
}

// PSR-1 rule 3: this file only declares a class, so there is no echo here

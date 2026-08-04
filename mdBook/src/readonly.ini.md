# Readonly
A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization.

``readonly`` also applies inside the ``__clone()`` magic method: cloning doesn't allow for changing a readonly property.

A class may be readonly since version 8.2, making all of of its properties readonly too. The children classes must also be readonly.
```php
<?php

    class Test {
       public readonly string $prop;
    
       public function __construct(string $prop) {
           // Legal initialization.
           $this->prop = $prop;
       }
    }
    
    $test = new Test(foobar);
    // Legal read.
    var_dump($test->prop); // string(6) foobar 
    
    // Illegal reassignment. It does not matter that the assigned value is the same.
    $test->prop = foobar;
    // Error: Cannot modify readonly property Test::$prop

?>
```

## See Also

+ [PHP 8.1: Readonly Properties](https://php.watch/versions/8.1/readonly)
+ [The Hidden Surprises of PHP Readonly Properties](https://phpfashion.com/en/php-readonly-properties)

Related : [Class](Class), [__clone() Method](__clone() Method), [Properties](Properties), [Clone](Clone), [Property Type Declaration](Property Type Declaration), [Var](Var), [Writeable](Writeable), [Ownership](Ownership), [Record Type](Record Type), [Struct Type](Struct Type), [Type System](Type System), [Modifier](Modifier)

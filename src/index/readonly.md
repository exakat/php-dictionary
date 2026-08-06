# Readonly
A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization.

``readonly`` also applies inside the ``__clone()`` magic method: cloning doesn't allow for changing a readonly property.

A class may be readonly since version 8.2, making all of of its properties readonly too. The children classes must also be readonly.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readonly.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readonly.html","name":"Readonly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 14:26:32 +0000","dateModified":"Mon, 13 Jul 2026 14:26:32 +0000","description":"A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Readonly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties.readonly-properties)**
## See Also

+ [PHP 8.1: Readonly Properties](https://php.watch/versions/8.1/readonly)
+ [The Hidden Surprises of PHP Readonly Properties](https://phpfashion.com/en/php-readonly-properties)

## Related

+ [Class](class.ini.html)
+ [\_\_clone() Method](__clone.ini.html)
+ [Properties](property.ini.html)
+ [Clone](clone.ini.html)
+ [Property Type Declaration](type-declaration-property.ini.html)
+ [Var](var.ini.html)
+ [Writeable](writeable.ini.html)
+ [Ownership](borrow-checking.ini.html)
+ [Record Type](record-type.ini.html)
+ [Struct Type](struct-type.ini.html)
+ [Type System](type-system.ini.html)
+ [Modifier](modifier.ini.html)

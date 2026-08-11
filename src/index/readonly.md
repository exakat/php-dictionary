# Readonly
A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization.

``readonly`` also applies inside the ``__clone()`` magic method: cloning doesn't allow for changing a readonly property.

A class may be readonly since version 8.2, making all of of its properties readonly too. The children classes must also be readonly.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readonly.html","name":"Readonly","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A property or a class can be declared readonly, which prevents modification of the property or all properties after initialization","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Readonly.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"readonly"}]}]}</script>
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

+ [Class](class.html)
+ [\_\_clone() Method](__clone.html)
+ [Properties](property.html)
+ [Clone](clone.html)
+ [Property Type Declaration](type-declaration-property.html)
+ [Var](var.html)
+ [Writeable](writeable.html)
+ [Ownership](borrow-checking.html)
+ [Record Type](record-type.html)
+ [Struct Type](struct-type.html)
+ [Type System](type-system.html)
+ [Modifier](modifier.html)

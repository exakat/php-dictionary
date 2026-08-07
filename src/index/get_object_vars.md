# get\_object\_vars()
``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values. 

``get_object_vars()`` does not return static properties, which are class level, and not object level. 

``get_object_vars()`` does not return uninitialized properties. It returns all existing properties, may they be specified in the class definition, or not. It returns the trait and the parent properties.

``get_object_vars()`` respect visibility, so its result may differ depending on its calling location: ``private`` properties are only visible when ``get_object_vars()`` is called from within the class itself; ``protected`` may be visibile when called from child; otherwise, only ``public`` properties are returned.

Constants are not returned by that function. 

``get_object_vars()`` is very similar to the ``(array)`` cast operator. It is very different from the ``get_class_vars()`` method, which returns the properties as defined in the class, and including the static properties. It is also possible do use ``json_encode()`` followed by ``json_decode()``, though some data might get lost in the translation proceses.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html","name":"get_object_vars()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"get_object_vars()"}]}]}</script>
```php
<?php

trait T {
    public $w = '3';
}

class X {
    use T;
    
    private int $p = 1;
    private int $q = 2;
    public int $r = 3;
    public int $s = 4;
    public int $t;
    
    static string $v = 'abc';
    
    function __construct() {
        unset($this->s);

        $this->u = 6;
    }
}

print_r(get_object_vars(new x));

/**
Array
(
    [r] => 3
    [w] => 3
    [u] => 6
)
*/
?>
```

**[Documentation](https://www.php.net/manual/en/function.get-object-vars.php)**
## See Also

+ [Object-Oriented PHP: Autoloading, Serializing, and Querying Objects](https://www.elated.com/object-oriented-php-autoloading-serializing-and-querying-objects/)
+ [Convert PHP object to array](https://www.stechies.com/convert-php-object-array/)

## Related

+ [get\_class\_vars()](get_class_vars.html)
+ [Reflection](reflection.html)
+ [Visibility](visibility.html)
+ [Properties](property.html)
+ [Cast Operator](cast.html)
+ [json\_encode()](json_encode.html)
+ [Static Property](static-property.html)
+ [Introspection](introspection.html)

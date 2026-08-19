# get\_object\_vars()
``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values. 

``get_object_vars()`` does not return static properties, which are class level, and not object level. 

``get_object_vars()`` does not return uninitialized properties. It returns all existing properties, may they be specified in the class definition, or not. It returns the trait and the parent properties.

``get_object_vars()`` respect visibility, so its result may differ depending on its calling location: ``private`` properties are only visible when ``get_object_vars()`` is called from within the class itself; ``protected`` may be visible when called from a child; otherwise, only ``public`` properties are returned.

Constants are not returned by that function. 

``get_object_vars()`` is very similar to the ``(array)`` cast operator. It is very different from the ``get_class_vars()`` method, which returns the properties as defined in the class, and including the static properties. It is also possible to use ``json_encode()`` followed by ``json_decode()``, though some data might get lost in the translation process.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars.html","name":"get_object_vars()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:52 +0000","dateModified":"Sat, 08 Aug 2026 14:31:52 +0000","description":"get_object_vars() is a PHP native function, which returns an array with the object properties as index, and their related respective values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_object_vars().html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class_vars.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reflection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json_encode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/introspection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.get-object-vars.php"},{"@type":"CreativeWork","name":"Object-Oriented PHP: Autoloading, Serializing, and Querying Objects","url":"https:\/\/www.elated.com\/object-oriented-php-autoloading-serializing-and-querying-objects\/"},{"@type":"CreativeWork","name":"Convert PHP object to array","url":"https:\/\/www.stechies.com\/convert-php-object-array\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"get_object_vars"}]}]}</script>
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

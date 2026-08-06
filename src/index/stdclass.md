# stdclass
Stdclass is a native PHP class. It is the class used when a generic object is created, for example with ``json_decode()`` or the ``(object)`` cast operator.

The stdClass is allowed to create dynamic properties on the fly, as its base definition has none.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stdclass.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stdclass.html","name":"stdclass","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:18:04 +0000","dateModified":"Mon, 06 Jul 2026 10:18:04 +0000","description":"Stdclass is a native PHP class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/stdclass.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    private $property = 1;
    
    function foo() {
        // dynamic property
        $this->a = 1;
        
        // dynamic property with variable name 
        $b = "abc";
        $this->$b = 1; 
        
        // static property
        $this->property = 1;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.object.php#language.types.object.casting)**
## See Also

+ [Quick way to create a PHP stdClass](https://www.simonholywell.com/post/2016/11/quick-way-to-create-php-stdclass/)

## Related

+ [Properties](property.ini.html)
+ [Dynamic Properties](dynamic-property.ini.html)
+ [is\_object()](is_object.ini.html)
+ [Plain Old PHP Object (POPO)](popo.ini.html)

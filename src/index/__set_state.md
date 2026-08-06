# \_\_set\_state() Method
``__set_state()`` is a magic method: it is called when an object has been exported with ``var_export()``, and has to be instantiated again. 

``__set_state()`` is tasked with recreating the object, assigning the previous values to it, and recreating any missing properties, such as database connections or resources.

The ``__set_state()`` method has no counterpart: ``var_export()`` do not use any magic method. 

``__set_state()`` is a static method, unlike the other magic methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__set_state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__set_state.html","name":"__set_state() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``__set_state()`` is a magic method: it is called when an object has been exported with ``var_export()``, and has to be instantiated again","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/__set_state() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class X {
    private $values = ['a' => 1,
                       'b' => 2,
                       ];

    // Checks the dictionary, or return 0
    public static function __set_state($array) {
        $object = new self();

        // This takes advantage of PHP object invasion
        $object->values['a'] = $array['a'] ?? '0';
        $object->values['b'] = $array['b'] ?? '0';
        
        return $object;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php#object.set-state)**
## See Also

+ [The Magic __set_state Method](https://www.softcoded.com/articles/set_state.php)

## Related

+ [Magic Methods](magic-method.ini.html)
+ [Object Invasion](object-invasion.ini.html)

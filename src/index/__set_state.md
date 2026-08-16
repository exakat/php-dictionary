# \_\_set\_state() Method
``__set_state()`` is a magic method: it is called when an object has been exported with ``var_export()``, and has to be instantiated again. 

``__set_state()`` is tasked with recreating the object, assigning the previous values to it, and recreating any missing properties, such as database connections or resources.

The ``__set_state()`` method has no counterpart: ``var_export()`` does not use any magic method.

``__set_state()`` is a static method, unlike the other magic methods.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set_state.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set_state.html","name":"__set_state() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:35:59 +0000","dateModified":"Thu, 13 Aug 2026 05:35:59 +0000","description":"__set_state() is a magic method: it is called when an object has been exported with var_export(), and has to be instantiated again","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__set_state() Method.html"]}],"keywords":["magic method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-invasion.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php#object.set-state"},{"@type":"CreativeWork","name":"The Magic __set_state Method","url":"https:\/\/www.softcoded.com\/articles\/set_state.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__set_state"}]}]}</script>
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

+ [Magic Methods](magic-method.html)
+ [Object Invasion](object-invasion.html)

# \_\_unset() Method
``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property. That way, it is possible to remove dynamically properties. Hardcoded properties are reset to their default state, and do not call this magic method.

The ``__unset()`` method is usually paired with the ``__isset()`` and ``__set()`` methods.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unset.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unset.html","name":"__unset() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:43:57 +0000","dateModified":"Mon, 03 Aug 2026 16:43:57 +0000","description":"``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unset() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"__unset() Method"}]}]}</script>
```php
<?php

    class X {
        private $values = ['a' => 1,
                           'b' => 2,
                           ];
    
        function __unset($name) {
            unset($this->values[$name]);
        }
    
        function __isset($name) {
            return isset($this->values[$name]);
        }
    
        function __set($name, $value) {
            $this->values[$name] = $value;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [__get(), __set(), __isset() and __unset()](https://riptutorial.com/php/example/3635/--get------set------isset---and---unset--)

## Related

+ [Magic Methods](magicmethod.html)
+ [\_\_set() Method](__set.html)
+ [\_\_isset() Method](__isset.html)
+ [Magic Constants](magic-constant.html)
+ [Magic Property](magic-property.html)

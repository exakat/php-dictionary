# \_\_callStatic() Method
``__callStatic()`` is a magic method: it is called when a static method cannot be accessed: either because it doesn't exist or because its visibility prevents it. 

``__callStatic()`` is not called when the method exists and is not static.

That way, it is possible to create dynamically static methods, without hardcoding them. 

The ``__callStatic()`` method receives the name of the target-method, and a list of arguments. 

The ``__callStatic()`` method has a related version for non-static methods, called ``__call()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__callstatic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__callstatic.html","name":"__callStatic() Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"__callStatic() is a magic method: it is called when a static method cannot be accessed: either because it doesn't exist or because its visibility prevents it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__callstatic.html"]}],"keywords":["magic method"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/visibility.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.magic.php"},{"@type":"CreativeWork","name":"Understand more magic methods: __callStatic()","url":"https:\/\/dev.to\/ngodinhcuong\/understand-more-magic-methods-callstatic-2828"},{"@type":"CreativeWork","name":"PHP __callStatic","url":"https:\/\/www.phptutorial.net\/php-oop\/php-__callstatic\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__callstatic"}]}]}</script>
```php
<?php

    class X {
        // Checks the dictionary, or return 0
        static function __callStatic($name, $args) {
            if (method_exists(self::class, $name)) {
                return X::$name(...$args);
            }
            
            return 0;
        }
        
        private static function foo() {
            print __METHOD__;
        }
    }
    
    X::foo(); // X::foo
    X::bar(); // nothing

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.magic.php)**
## See Also

+ [Understand more magic methods: __callStatic()](https://dev.to/ngodinhcuong/understand-more-magic-methods-callstatic-2828)
+ [PHP __callStatic](https://www.phptutorial.net/php-oop/php-__callstatic/)

## Related

+ [Magic Methods](magic-method.html)
+ [\_\_call() Method](__call.html)
+ [Visibility](visibility.html)

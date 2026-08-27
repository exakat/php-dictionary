# Static Class
A static class is a class that only holds static methods, properties or constants. 

There is no special syntax for such a class: it is simply created with the above-mentioned structures. Other programming languages have a dedicated syntax for them.

A static class is usually used by direct call, with the ``::`` operator. A static class may still be instantiated, though there is little usage for such an object.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-class.html","name":"Static Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A static class is a class that only holds static methods, properties or constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-class.html"]}],"keywords":["operator","noSeeAlso"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scope-resolution-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-constant.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/colon.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.static.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"static-class"}]}]}</script>
```php
<?php

    class X {
        public static int $p = 0;
        
        public static function increment(): int {
            return self::$p++;
        }
    }
    
    echo X::increment(); // 1

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.static.php)**
## Related

+ [Scope Resolution Operator ::](scope-resolution-operator.html)
+ [Static Method](static-method.html)
+ [Static Constant](static-constant.html)
+ [Static Property](static-property.html)
+ [Colon](colon.html)

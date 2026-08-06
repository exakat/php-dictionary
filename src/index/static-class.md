# Static Class
A static class is a class that only holds static methods, properties or constants. 

There is no special syntax for such a class: it is simply created with the above-mentioned structures. Other programming languages have a dedicated syntax for them.

A static class is usually used by direct call, with the ``::`` operator. A static class may still be instantiated, though there is little usage for such an object.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/static-class.html","name":"Static Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 08:05:10 +0000","dateModified":"Tue, 07 Jul 2026 08:05:10 +0000","description":"A static class is a class that only holds static methods, properties or constants","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Static Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Scope Resolution Operator ::](scope-resolution-operator.ini.html)
+ [Static Method](static-method.ini.html)
+ [Static Constant](static-constant.ini.html)
+ [Static Property](static-property.ini.html)
+ [Colon](colon.ini.html)

# Late Static Binding
PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/late-static-binding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/late-static-binding.html","name":"Late Static Binding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:29:14 +0000","dateModified":"Tue, 04 Aug 2026 11:29:14 +0000","description":"PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Late Static Binding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)**
## See Also

+ [Late static binding in PHP - What, How & When](https://www.amitmerchant.com/late-static-binding-php-what-how-when/)
+ [A real life example of using Late Static Binding in PHP](https://dev.to/asifzcpe/a-real-life-example-of-using-late-static-binding-in-php-h6b/)
+ [Example of using Late Static Binding in PHP](https://dev.to/developeralamin/example-of-using-late-static-binding-in-php-18kh)

## Related

+ [Self](self.ini.html)
+ [static](static.ini.html)
+ [parent](parent.ini.html)
+ [Early Binding](early-binding.ini.html)
+ [Child Class](child-class.ini.html)
+ [Compile Time](compile-time.ini.html)
+ [Execution Time](execution-time.ini.html)
+ [Method Resolution Order (MRO)](mro.ini.html)

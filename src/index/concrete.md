# Concrete Class
PHP has abstract classes and methods: the contrary to ``abstract`` is concrete. This is the default state of a method or class, when it has a code block with implementation. It also has no specific keyword to designate it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concrete.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/concrete.html","name":"Concrete Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:26:24 +0000","dateModified":"Fri, 19 Jun 2026 21:26:24 +0000","description":"PHP has abstract classes and methods: the contrary to ``abstract`` is concrete","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Concrete Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    abstract class AbstractClass
    {
        // Concrete method
        public function printOut() {
            print $this->getValue() . "\n";
        }
    
        // Method without an implementation
        abstract protected function getValue();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.abstract.php)**
## See Also

+ [Understanding Concrete Classes in PHP.](https://medium.com/@msaimhashmi/understanding-concrete-classes-in-php-f97d73d21aa0)

## Related

+ [Abstract Keyword](abstract.ini.html)
+ [Abstract Class](abstract-class.ini.html)
+ [Abstract Method](abstract-method.ini.html)
+ [Concrete Method](concrete-method.ini.html)
+ [Program To Interface](program-to-interface.ini.html)

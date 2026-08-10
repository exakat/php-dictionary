# Concrete Class
PHP has abstract classes and methods: the contrary to ``abstract`` is concrete. This is the default state of a method or class, when it has a code block with implementation. It also has no specific keyword to designate it.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concrete.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concrete.html","name":"Concrete Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHP has abstract classes and methods: the contrary to ``abstract`` is concrete","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Concrete Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Concrete Class"}]}]}</script>
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

+ [Abstract Keyword](abstract.html)
+ [Abstract Class](abstract-class.html)
+ [Abstract Method](abstract-method.html)
+ [Concrete Method](concrete-method.html)
+ [Program To Interface](program-to-interface.html)

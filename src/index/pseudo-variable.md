# Pseudo-variable
A pseudo-variable is a term used to describe a variable that looks like a variable but does not represent one. Instead, it is a special case that has a specific meaning within its context. ``$this`` is the only pseudo-variable: it represents the object that is called.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-variable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pseudo-variable.html","name":"Pseudo-variable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:05:31 +0000","dateModified":"Sat, 11 Jul 2026 09:05:31 +0000","description":"A pseudo-variable is a term used to describe a variable that looks like a variable but does not represent one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Pseudo-variable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pseudo-variable"}]}]}</script>
```php
<?php

    class X {
        private string $name;
        
        function __construct($name) {
            $this->name = $name;
        }
        
        function foo() {
            // $this represents any object of type x
            print $this->name;
        }
    }
    
    // $a represents only the object 'a', type x, until it is reassigned
    $a = new x('a');
    
    // $b represents only the object 'b', type x, until it is reassigned
    $b = new x('b');

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.basic.php)**
## Related

+ [Variables](variable.html)

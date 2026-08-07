# Use
The use operator has three distinct usages. 

The use operator allows the import and aliasing of fully qualified names, such as classes, interfaces, constants, etc. in the current namespace. 

When ``use`` used inside a class or a trait, it imports a trait and its methods and properties. It is also the place to solve naming conflicts.

When ``use`` is used with a closure, it imports the listed variables in the closure, from the defining environment.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html","name":"Use","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The use operator has three distinct usages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Use.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Use"}]}]}</script>
```php
<?php

namespace My\Space {
    // class importation with use
    use \Some\Other\Space\aClass as A;
    
    class B {
        // trait importation of use
        use MyTrait; 
    
        function foo() {
            $a = 1;
            // use imports the variable $a in the closure. Its value is accessible at execution time.
            $closure = function ($b) use ($a) { return $a + $b;};
        }
    }

    // class importation with use
    use \Some\Other\Space\aClass as A2;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.importing.php)**
## Related

+ [Fully Qualified Name](fully-qualified-name.html)
+ [Use Alias](use-alias.html)
+ [Closure](closure.html)
+ [Trait](trait.html)
+ [Use In Traits](use-trait.html)
+ [Fully Qualified Name](fqn.html)
+ [Class Aliases](class-alias.html)
+ [Class Operator](class-operator.html)
+ [class\_alias()](class_alias.html)
+ [Insteadof](insteadof.html)

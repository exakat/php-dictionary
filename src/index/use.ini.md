# Use
The use operator has three distinct usages. 

The use operator allows the import and aliasing of fully qualified names, such as classes, interfaces, constants, etc. in the current namespace. 

When ``use`` used inside a class or a trait, it imports a trait and its methods and properties. It is also the place to solve naming conflicts.

When ``use`` is used with a closure, it imports the listed variables in the closure, from the defining environment.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/use.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/use.ini.html","name":"Use","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The use operator has three distinct usages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Use.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Fully Qualified Name](fully-qualified-name.ini.html)
+ [Use Alias](use-alias.ini.html)
+ [Closure](closure.ini.html)
+ [Trait](trait.ini.html)
+ [Use In Traits](use-trait.ini.html)
+ [Fully Qualified Name](fqn.ini.html)
+ [Class Aliases](class-alias.ini.html)
+ [Class Operator](class-operator.ini.html)
+ [class\_alias()](class_alias.ini.html)
+ [Insteadof](insteadof.ini.html)

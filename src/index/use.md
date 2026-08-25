# Use
The use operator has three distinct usages. 

The use operator allows the import and aliasing of fully qualified names, such as classes, interfaces, constants, etc. in the current namespace. 

When ``use`` used inside a class or a trait, it imports a trait and its methods and properties. It is also the place to solve naming conflicts.

When ``use`` is used with a closure, it imports the listed variables in the closure, from the defining environment.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html","name":"Use","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 16:53:56 +0000","dateModified":"Mon, 10 Aug 2026 16:53:56 +0000","description":"The use operator has three distinct usages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"]}],"keywords":["keyword","disambiguation","multiple meanings"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fqn.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class-operator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class_alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insteadof.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.importing.php"},{"@type":"CreativeWork","name":"Anonymous functions","url":"https:\/\/www.php.net\/manual\/en\/functions.anonymous.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"use"}]}]}</script>
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
## See Also

+ [Anonymous functions](https://www.php.net/manual/en/functions.anonymous.php)

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

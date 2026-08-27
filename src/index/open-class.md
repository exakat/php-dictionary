# Open Class
Open classes allow external code to add or replace methods on an existing class after it has been defined, including built-in or third-party classes. This is sometimes called controlled monkey-patching when the language provides guard-rails to avoid unintended conflicts.

Languages such as Ruby expose this feature natively: any class can be reopened with ``class X ... end`` and new methods are merged in. The class remains open throughout the program's lifetime, so any part of the codebase can contribute methods.

PHP does not support open classes. Once a class is defined its set of methods is fixed. The closest approximations are:

+ Traits, which must be composed at the point of class definition, not after.
+ ``__call`` / ``__callStatic`` magic methods, which dispatch unknown method calls dynamically but without type-level visibility.
+ Wrapper or decorator classes that delegate to the original.

None of these allow retrofitting a method onto a class that has already been fully declared.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-class.html","name":"Open Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:36:32 +0000","dateModified":"Thu, 23 Jul 2026 13:36:32 +0000","description":"Open classes allow external code to add or replace methods on an existing class after it has been defined, including built-in or third-party classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-class.html"]}],"alternateName":["monkey-patching","controlled-monkey-patching"],"keywords":["unsupported","class","oop","_noDocumentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use-trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__call.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__callstatic.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixin.html"}],"citation":[{"@type":"CreativeWork","name":"Ruby open classes","url":"https:\/\/ruby-doc.org\/docs\/ruby-doc-bundle\/ProgrammingRuby\/book\/classes.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"open-class"}]}]}</script>
```php
<?php

    // PHP does not support reopening a class.
    // The following is illustrative of what the feature would look like,
    // but it is a syntax error in PHP.
    
    class MyString {
        public function upper(): string { return strtoupper($this->value); }
    }
    
    // Hypothetical open-class syntax (NOT valid PHP):
    // open class MyString {
    //     public function lower(): string { return strtolower($this->value); }
    // }

?>
```

## See Also

+ [Ruby open classes](https://ruby-doc.org/docs/ruby-doc-bundle/ProgrammingRuby/book/classes.html)

## Related

+ [Trait](trait.html)
+ [Use In Traits](use-trait.html)
+ [\_\_call() Method](__call.html)
+ [\_\_callStatic() Method](__callstatic.html)
+ [Mixin](mixin.html)

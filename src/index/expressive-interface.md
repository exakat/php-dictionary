# Expressive Interface
An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write. It emphasizes clarity and ease of use, often resembling natural language.

The goal is to make your code self-documenting and reduce the cognitive load on developers reading or writing it.

An expressive interface is not related to an interface: it may be implemented without them.

The notion of expressive interface is similar to the fluent interface.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expressive-interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expressive-interface.html","name":"Expressive Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Expressive Interface.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"expressive-interface"}]}]}</script>
```php
<?php

    class script {
        function hello() {
            print 'Hello ';
            return $this;
        }
    
        function word() {
            print 'word.';
            return $this;
        }
    }
    
    $script = new Script();
    
    $script->hello()->world();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Fluent_interface)**
## See Also

+ [Fluent Interface](https://www.codegenes.net/blog/php-method-chaining-or-fluent-interface/)
+ [Fluent Interface Pattern in PHP](https://softwarepatternslexicon.com/php/structural-patterns-in-php/fluent-interface-pattern/)

## Related

+ [Fluent Interface](fluent-interface.html)
+ [Self-documenting](self-documenting.html)
+ [Interface](interface.html)

## Related packages

+ [bassim/super-expressive-php](https://packagist.org/packages/bassim/super-expressive-php)

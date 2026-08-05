# Expressive Interface
An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write. It emphasizes clarity and ease of use, often resembling natural language.

The goal is to make your code self-documenting and reduce the cognitive load on developers reading or writing it.

An expressive interface is not related to an interface: it may be implemented without them.

The notion of expressive interface is similar to the fluent interface.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/expressive-interface.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/expressive-interface.ini.html","name":"Expressive Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 04 Jul 2026 08:20:46 +0000","dateModified":"Sat, 04 Jul 2026 08:20:46 +0000","description":"An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Expressive Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Fluent Interface](fluent-interface.ini.html)
+ [Self-documenting](self-documenting.ini.html)
+ [Interface](interface.ini.html)

## Related packages

+ [bassim/super-expressive-php](https://packagist.org/packages/bassim/super-expressive-php)

# NoDiscard
``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context. That value must be processed there, and not ignored, as it is important for the rest of the processing.

``NoDiscard`` is already used internally, with ``flock`` and ``DateTimeImmutable::setTime()``, to ensure that the result is checked.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html","name":"NoDiscard","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"NoDiscard attribute ensures that the returned value of a method is collected in the calling context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/NoDiscard.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nodiscard"}]}]}</script>
```php
<?php

    #[\NoDiscard("This returns NULL in case of error")]
    function foo(): ?array {}
    
    $result = foo();
    if ($result === null) { 
        throw new Exception('an error occured!');
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.nodiscard.php)**
## See Also

+ [PHP RFC: Marking return values as important (#[\NoDiscard])](https://wiki.php.net/rfc/marking_return_value_as_important)
+ [#[\NoDiscard] — Warn When Return Values Are Ignored](https://haphpiness.com/#/happy/42)

## Related

+ [Attribute](attribute.html)
+ [Attribute Class](attribute-class.html)
+ [PHP Native Attributes](php-attribute.html)
+ [PHP Native Attribute](php-native-attribute.html)
+ [(void) Cast](void-cast.html)

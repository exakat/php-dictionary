# NoDiscard
``NoDiscard`` attribute ensures that the returned value of a method is collected in the calling context. That value must be processed there, and not ignored, as it is important for the rest of the processing.

``NoDiscard`` is already used internally, with ``flock`` and ``DateTimeImmutable::setTime()``, to ensure that the result is checked.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html","name":"NoDiscard","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 08:25:45 +0000","dateModified":"Wed, 19 Aug 2026 08:25:45 +0000","description":"NoDiscard attribute ensures that the returned value of a method is collected in the calling context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html"]}],"keywords":["php attribute","rfc","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/void-cast.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.nodiscard.php"},{"@type":"CreativeWork","name":"PHP RFC: Marking return values as important (#[\\NoDiscard])","url":"https:\/\/wiki.php.net\/rfc\/marking_return_value_as_important"},{"@type":"CreativeWork","name":"#[\\NoDiscard] \u2014 Warn When Return Values Are Ignored","url":"https:\/\/haphpiness.com\/#\/happy\/42"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"nodiscard"}]}]}</script>
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

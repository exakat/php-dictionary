# (void) Cast
The ``(void)`` cast is a special cast. It doesn't actually cast a value to ``void``, which does not exist as data, only as a type. ``(void)`` actually tells the ``#[NoDiscard]`` attribute that the returned value is explicitly discarded. Otherwise, PHP expects the returned value to be collected and used.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/void-cast.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/void-cast.html","name":"(void) Cast","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The (void) cast is a special cast","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/void-cast.html"]}],"keywords":["cast"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.nodiscard.php"},{"@type":"CreativeWork","name":"#[\\NoDiscard] attribute","url":"https:\/\/www.php.net\/manual\/en\/migration85.new-features.php#migration85.new-features.core.nodiscard-attribute"},{"@type":"CreativeWork","name":"Stop Ignoring Important Returns with PHP 8.5\u2019s #[\\NoDiscard] Attribute","url":"https:\/\/www.amitmerchant.com\/the-nodiscard-attribute-in-php-85\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"void-cast"}]}]}</script>
```php
<?php

#[NoDiscard]
function foo() {
    return 1;
}

// OK
(void) foo(); 

// Wrong, the returned value MUST be collected
foo(); 

?>
```

**[Documentation](https://www.php.net/manual/en/class.nodiscard.php)**
## See Also

+ [#[\NoDiscard] attribute](https://www.php.net/manual/en/migration85.new-features.php#migration85.new-features.core.nodiscard-attribute)
+ [Stop Ignoring Important Returns with PHP 8.5’s #[\NoDiscard] Attribute](https://www.amitmerchant.com/the-nodiscard-attribute-in-php-85/)

## Related

+ [NoDiscard](nodiscard.html)

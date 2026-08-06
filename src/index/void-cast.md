# (void) Cast
The ``(void)`` cast is a special cast. It doesn't actually cast a value to ``void``, which does not exist as data, only as a type. ``(void)`` actually tells the ``#[NoDiscard]`` attribute that the returned value is explicitly discarded. Otherwise, PHP expects the returned value to be collected and used.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/void-cast.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/void-cast.html","name":"(void) Cast","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``(void)`` cast is a special cast","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/(void) Cast.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [NoDiscard](nodiscard.ini.html)

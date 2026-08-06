# HTML Entity
HTML entities are special character sequences, that represents a single character. Such representation is not needed for simple characters, such as the Latin alphabet. On the other hand, they are needed for unusual characters, in particular when the encoding cannot be guaranteed to support it. 

They are also needed to display characters, which have a special meaning, such as double quote ``"``, or the greater ``>`` and lesser signs ``<``. 

HTML entities makes the source code longer, and harder to read. 

HTML entities may have a letter representation, while they always have a numeric representation. For example, the ampersand may be written ``\&amp;`` and ``\&#38;``.

PHP has functions to decode and encode: ``htmlentities()`` and ``htmlentities_decode()``, ``htmlspecialchars()`` and ``htmlspecialchars_decode()``. The ``get_html_translation_table()`` provides the full list of supported entities.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/html-entity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/html-entity.html","name":"HTML Entity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 24 Jun 2026 05:44:57 +0000","dateModified":"Wed, 24 Jun 2026 05:44:57 +0000","description":"HTML entities are special character sequences, that represents a single character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/HTML Entity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

echo htmlentities('&'); // &amp;

print htmlentities_decode('&lt;A&gt;'); // <A>

?>
```

**[Documentation](https://www.php.net/manual/en/function.htmlentities.php)**
## See Also

+ [Named character references](https://html.spec.whatwg.org/multipage/named-characters.html)

## Related

+ [HyperText Markup Language (HTML)](html.ini.html)
+ [Encoding](encoding.ini.html)
+ [Text Encoding](encoding-text.ini.html)
+ [HTML Escaping](escape-html.ini.html)
+ [Cross Site Scripting (XSS)](xss.ini.html)

# HTML Entity
HTML entities are special character sequences, that represents a single character. Such representation is not needed for simple characters, such as the Latin alphabet. On the other hand, they are needed for unusual characters, in particular when the encoding cannot be guaranteed to support it. 

They are also needed to display characters, which have a special meaning, such as double quote ``"``, or the greater ``>`` and lesser signs ``<``. 

HTML entities makes the source code longer, and harder to read. 

HTML entities may have a letter representation, while they always have a numeric representation. For example, the ampersand may be written ``\&amp;`` and ``\&#38;``.

PHP has functions to decode and encode: ``htmlentities()`` and ``htmlentities_decode()``, ``htmlspecialchars()`` and ``htmlspecialchars_decode()``. The ``get_html_translation_table()`` provides the full list of supported entities.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html-entity.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html-entity.html","name":"HTML Entity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"HTML entities are special character sequences, that represents a single character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/HTML Entity.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"html-entity"}]}]}</script>
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

+ [HyperText Markup Language (HTML)](html.html)
+ [Encoding](encoding.html)
+ [Text Encoding](encoding-text.html)
+ [HTML Escaping](escape-html.html)
+ [Cross Site Scripting (XSS)](xss.html)

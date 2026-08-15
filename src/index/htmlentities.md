# htmlentities()
``htmlentities()`` is a native PHP function which converts special characters in a string to their equivalent in HTML.

``htmlentities()`` takes the string to be encoded, as an argument. It also accepts an argument ``$encoding`` to specify what the original encoding of the string is, in particular when it is not ``utf-8``, which is the default configuration.

There are options to control which characters shall be encoded: for example, single and double quotes may be converted or not, with ``ENT_QUOTES`` and ``ENT_NOQUOTES``, respectively.

Finally, ``$double_encode`` makes ``htmlentities()`` skip encoding a second time any entities already set in the string.

The opposite of ``htmlentities()`` is ``html_entity_decode()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlentities.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlentities.html","name":"htmlentities()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:41:43 +0000","dateModified":"Tue, 11 Aug 2026 14:41:43 +0000","description":"htmlentities() is a native PHP function which converts special characters in a string to their equivalent in HTML","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlentities().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"htmlentities"}]}]}</script>
```php
<?php

    $str = "A 'quote' is <b>bold</b>";
    
    echo htmlentities($str);
    echo "\n\n";
    echo htmlentities($str, ENT_COMPAT);

?>
```

**[Documentation](https://www.php.net/manual/en/function.htmlentities.php)**
## See Also

+ [HTML Entity List](https://htmlentities.io/articles/html-entities-list-reference)

## Related

+ [HyperText Markup Language (HTML)](html.html)
+ [Entities](entity.html)
+ [default\_charset](default_charset.html)
+ [html\_entity\_decode](html_entity_decode.html)
+ [htmlspecialchars](htmlspecialchars.html)

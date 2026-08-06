# htmlentities()
``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML. 

``htmlentities()`` takes the string to be encoded, as argument. It also accepts an argument ``$encoding`` to specify which is the original encoding of the string, in particular when it is not ``utf-8``, which is the default configuration. 

There are options to control which characters shall be encoded: for example, single and double quotes may be converted to not, with ``ENT_QUOTES`` and ``ENT_NOQUOTES``, respectively. 

Finally, ``$double_encode`` makes ``htmlentities()`` skip encoding a second time any entities already set in the string. 

The contrary to ``htmlentities()`` is ``html_entity_decode()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/htmlentities.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/htmlentities.html","name":"htmlentities()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 28 Jun 2026 10:27:36 +0000","dateModified":"Sun, 28 Jun 2026 10:27:36 +0000","description":"``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/htmlentities().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [HTML Entity List](https://www.freeformatter.com/html-entities.html)

## Related

+ [HyperText Markup Language (HTML)](html.ini.html)
+ [Entities](entity.ini.html)
+ [default\_charset](default_charset.ini.html)
+ [html\_entity\_decode](html_entity_decode.ini.html)
+ [htmlspecialchars](htmlspecialchars.ini.html)

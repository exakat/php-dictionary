# Tabulation
A tabulation is a whitespace character, that often represents the equivalent of four space characters.

A tabulation is represented by the escape sequence ``\t``, in double quote strings. It is also the ASCII code 9.

Tabulations are important when formatting code, and are opposed to spaces. 

Tabulations are important for heredoc syntax, in particular in its relaxed syntax.

There are horizontal tabulations, which are the most commonly used, and vertical tabulations, with the ASCII code 11 and sequence ``\v``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tabulation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tabulation.html","name":"Tabulation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:48:42 +0000","dateModified":"Wed, 19 Aug 2026 06:48:42 +0000","description":"A tabulation is a whitespace character, that often represents the equivalent of four space characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tabulation.html"]}],"keywords":["character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/space.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/heredoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/indentation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nowdoc.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Tab_character"},{"@type":"CreativeWork","name":"Vertical Tab (\\v) in PHP","url":"https:\/\/mojoauth.com\/special-characters\/vertical-tab-v-in-php#understanding-the-usage-of-vertical-tab-v-in-php"},{"@type":"CreativeWork","name":"Elastic tabstops - a better way to indent and align code","url":"https:\/\/nick-gravgaard.com\/elastic-tabstops\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"tabulation"}]}]}</script>
```php
<?php

    echo "\t";
    echo chr(9); // ASCII code 9

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Tab_character)**
## See Also

+ [Vertical Tab (\v) in PHP](https://mojoauth.com/special-characters/vertical-tab-v-in-php#understanding-the-usage-of-vertical-tab-v-in-php)
+ [Elastic tabstops - a better way to indent and align code](https://nick-gravgaard.com/elastic-tabstops/)

## Related

+ [Space](space.html)
+ [Heredocs](heredoc.html)
+ [Indentation](indentation.html)
+ [Nowdocs](nowdoc.html)

# Case
``case`` is a PHP keyword, which may be used in three distinct situations: 

+ With ``switch()`` expression
+ With ``match()`` expression
+ With enumeration

``case`` is often complemented with ``default``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case.html","name":"Case","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:13:54 +0000","dateModified":"Wed, 26 Aug 2026 10:13:54 +0000","description":"case is a PHP keyword, which may be used in three distinct situations: ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case.html"]}],"keywords":["keyword","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/enum-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-case.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.switch.php"},{"@type":"CreativeWork","name":"match","url":"https:\/\/www.php.net\/manual\/en\/control-structures.match.php"},{"@type":"CreativeWork","name":"Switch statement","url":"https:\/\/en.wikipedia.org\/wiki\/Switch_statement"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"case"}]}]}</script>
```php
<?php

    enum Suit
    {
        case Hearts;
        case Diamonds;
        case Clubs;
        case Spades;
    }
    
    switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## See Also

+ [match](https://www.php.net/manual/en/control-structures.match.php)
+ [Switch statement](https://en.wikipedia.org/wiki/Switch_statement)

## Related

+ [Default](default.html)
+ [Match](match.html)
+ [Enumeration (enum)](enum.html)
+ [Enumeration Case](enum-case.html)
+ [Switch](switch.html)
+ [Switch Case](switch-case.html)

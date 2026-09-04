# Collation
Collation is the set of rules that define how strings are compared and sorted, and it is far less obvious than it sounds because different languages order the same characters differently. A naive comparison, such as PHP's strcmp or a plain ``sort()``, compares strings byte by byte according to the underlying encoding, which places accented letters, ligatures, and non-Latin scripts in positions that look wrong to a human reader; for example, byte order alone may sort 'pêche' after 'z' instead of next to 'pomme' as a French speaker would expect. Proper, locale-aware sorting instead follows the Unicode Collation Algorithm, aka UCA, which PHP exposes through the Collator class in the intl extension: constructing a Collator for a given locale and calling its ``sort()`` or ``compare()`` methods orders strings the way a native reader of that language expects, correctly handling accents, case, and script-specific ordering rules. The same underlying idea also appears outside PHP itself, notably as the COLLATE clause in databases like MySQL and PostgreSQL, which determines how that database engine compares and indexes text columns.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collation.html","name":"Collation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 09:04:41 +0000","dateModified":"Thu, 03 Sep 2026 09:04:41 +0000","description":"Collation is the set of rules that define how strings are compared and sorted, and it is far less obvious than it sounds because different languages order the same characters differently","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/collation.html"]}],"keywords":["extension","string","comparison"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/setlocale.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Collation"},{"@type":"CreativeWork","name":"Collator","url":"https:\/\/www.php.net\/manual\/en\/class.collator.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"collation"}]}]}</script>
```php
<?php

    $words = ['pomme', 'poire', 'pêche', 'prune'];
    
    $collator = new Collator('fr_FR');
    $collator->sort($words);
    
    print_r($words);
    // pêche, poire, pomme, prune

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Collation)**
## See Also

+ [Collator](https://www.php.net/manual/en/class.collator.php)

## Related

+ [Internationalization Functions](intl.html)
+ [Locale](locale.html)
+ [setlocale](setlocale.html)

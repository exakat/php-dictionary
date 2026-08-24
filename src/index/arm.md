# Arm
An arm is a branch in a ``match()`` expression. There is the ``default`` arm, and the other ``arms``. The arm includes the case, on the left, and the payload, on the right.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arm.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arm.html","name":"Arm","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 08:32:34 +0000","dateModified":"Mon, 24 Aug 2026 08:32:34 +0000","description":"An arm is a branch in a match() expression","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arm.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/if-then.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/branch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.match.php"},{"@type":"CreativeWork","name":"PHP match expression - flow control in PHP with match","url":"https:\/\/zetcode.com\/php\/match-expression\/"},{"@type":"CreativeWork","name":"Match expression","url":"https:\/\/php.watch\/versions\/8.0\/match-expression"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"arm"}]}]}</script>
```php
<?php

    // a match with 2 arm, including the default
    $a = match($b) {
        1 => 2,
        default => 3,
    };

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.match.php)**
## See Also

+ [PHP match expression - flow control in PHP with match](https://zetcode.com/php/match-expression/)
+ [Match expression](https://php.watch/versions/8.0/match-expression)

## Related

+ [If Then Else](if-then.html)
+ [Branch](branch.html)
+ [Match](match.html)

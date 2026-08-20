# Default
``default`` is a PHP keyword, used with ``switch()`` and ``match()`` structures. It represents any case that was not already considered.

In a ``switch()`` statement, ``default`` is optional, and may be placed anywhere among the ``case`` labels, though it is conventionally written last. It is only executed when none of the ``case`` values matches the tested expression, using loose comparison, ``==``. If a ``switch()`` has no ``default`` and no ``case`` matches, the statement simply does nothing, and execution continues after the block. Unlike ``case``, ``default`` never needs a value, since it always matches by exclusion.

In a ``match()`` expression, introduced in version 8.0, ``default`` plays the same role, but the comparison uses strict equality ``===``, and a missing ``default`` combined with no matching arm throws an ``UnhandledMatchError`` at runtime, rather than doing nothing. Because ``match()`` is an expression, its ``default`` arm must also return a value, just like every other arm.

Static analysis tools often flag a ``switch()`` without a ``default`` case as a potential source of silently unhandled values, especially when the tested expression can later gain new possible values, such as an enum case or a class constant.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default.html","name":"Default","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:06:21 +0000","dateModified":"Mon, 17 Aug 2026 09:06:21 +0000","description":"default is a PHP keyword, used with switch() and match() structures","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Default.html"]}],"keywords":["keyword","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/match.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default-value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-case.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/switch-default.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/control-structures.switch.php"},{"@type":"CreativeWork","name":"PHP match vs. switch \u2013 What's the Difference?","url":"https:\/\/www.designcise.com\/web\/tutorial\/what-is-the-difference-between-match-and-switch-in-php"},{"@type":"CreativeWork","name":"Switch vs Match in PHP: Choosing the Right Control Structure for Your Code","url":"https:\/\/www.themagentoblog.com\/2023\/07\/17\/switch-vs-match-in-php-choosing-the-right-control-structure-for-your-code\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"default"}]}]}</script>
```php
<?php

    switch ($i) {
        case 0:
            echo 'i equals 0';
            break;
        case 1:
            echo 'i equals 1';
            break;
        default:
            echo 'i is not 0 nor 1';
            break;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.switch.php)**
## See Also

+ [PHP match vs. switch – What's the Difference?](https://www.designcise.com/web/tutorial/what-is-the-difference-between-match-and-switch-in-php)
+ [Switch vs Match in PHP: Choosing the Right Control Structure for Your Code](https://www.themagentoblog.com/2023/07/17/switch-vs-match-in-php-choosing-the-right-control-structure-for-your-code/)

## Related

+ [Switch](switch.html)
+ [Match](match.html)
+ [Case](case.html)
+ [Default Value](default-value.html)
+ [Switch Case](switch-case.html)
+ [Switch Default](switch-default.html)

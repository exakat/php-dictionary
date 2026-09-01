# Not Operator
The not operator return the opposite boolean of a value. The value is first converted to boolean, according to classic PHP rules, then, negated. This operator returns a boolean.

There is also a bitwise not operator, which works at the bit level, on the value: ``~``.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/not.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/not.html","name":"Not Operator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Aug 2026 07:17:52 +0000","dateModified":"Fri, 21 Aug 2026 07:17:52 +0000","description":"The not operator return the opposite boolean of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/not.html"]}],"alternateName":["not-operator"],"keywords":["operator","logical","character"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/bang.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/tilde.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary-not.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logical-operator.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.logical.php"},{"@type":"CreativeWork","name":"Logical NOT (!)","url":"https:\/\/developer.mozilla.org\/docs\/Web\/JavaScript\/Reference\/Operators\/Logical_NOT"},{"@type":"CreativeWork","name":"What is the Logical Operators in PHP?","url":"https:\/\/dev.to\/baransel\/what-is-the-logical-operators-in-php-3bgf"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"not"}]}]}</script>
```php
<?php

    $a = 3;
    
    if (!$a) {
        print 'OK';
    } else {
        print 'KO';
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.logical.php)**
## See Also

+ [Logical NOT (!)](https://developer.mozilla.org/docs/Web/JavaScript/Reference/Operators/Logical_NOT)
+ [What is the Logical Operators in PHP?](https://dev.to/baransel/what-is-the-logical-operators-in-php-3bgf)

## Related

+ [Bang !](bang.html)
+ [Tilde ~](tilde.html)
+ [Binary Not Operator](binary-not.html)
+ [Logical Operators](logical-operator.html)

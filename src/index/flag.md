# Flag
A flag is another name for an option. Often, flags are booleans: they are either on, or off. 

Flags are often consecutive powers of 2, so they can be merged together by addition ``+`` or by logical or ``|``, and passed as one. 

Example of flags: 

+ ``preg_match()``, fourth argument: ``PREG_OFFSET_CAPTURE`` and ``PREG_UNMATCHED_AS_NULL``;
+ ``json_decode()``, fourth argument: ``JSON_BIGINT_AS_STRING``, ``JSON_INVALID_UTF8_IGNORE``, ``JSON_INVALID_UTF8_SUBSTITUTE``, ``JSON_OBJECT_AS_ARRAY``, ``JSON_THROW_ON_ERROR``;
+ ``ArrayObject::setFlags()``, first argument: 	``ArrayObject::STD_PROP_LIST`` or ``ArrayObject::ARRAY_AS_PROPS``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flag.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flag.html","name":"Flag","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 08:36:39 +0000","dateModified":"Tue, 01 Sep 2026 08:36:39 +0000","description":"A flag is another name for an option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/flag.html"]}],"keywords":["folklore"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/option.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/configuration.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Flag_(computing)"},{"@type":"CreativeWork","name":"preg_match","url":"https:\/\/www.php.net\/manual\/en\/function.preg-match.php"},{"@type":"CreativeWork","name":"json_decode","url":"https:\/\/www.php.net\/manual\/en\/function.json-decode.php"},{"@type":"CreativeWork","name":"Bitwise Operators","url":"https:\/\/www.php.net\/manual\/en\/language.operators.bitwise.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"flag"}]}]}</script>
```php
<?php

    $string = 'adg';
    
    preg_match('/([abc])([def])/', $string, $r, PREG_OFFSET_CAPTURE);
    print_r($r);
    /**
    Array
(
    [0] => ad
    [1] => a
    [2] => d
)
*/
    
    preg_match('/([abc])([def])/', $string, $r, PREG_OFFSET_CAPTURE);
    print_r($r);
/**
Array
(
    [0] => Array
        (
            [0] => ad
            [1] => 0
        )

    [1] => Array
        (
            [0] => a
            [1] => 0
        )

    [2] => Array
        (
            [0] => d
            [1] => 1
        )

)
*/
?>
```

**[Documentation](https://en.wikipedia.org/wiki/Flag_(computing))**
## See Also

+ [preg_match](https://www.php.net/manual/en/function.preg-match.php)
+ [json_decode](https://www.php.net/manual/en/function.json-decode.php)
+ [Bitwise Operators](https://www.php.net/manual/en/language.operators.bitwise.php)

## Related

+ [Option](option.html)
+ [Directives](directive.html)
+ [Configuration](configuration.html)

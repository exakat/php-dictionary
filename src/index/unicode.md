# Unicode
Unicode is a standard to represent text. It is maintained by the Unicode Consortium. Unicode provides a widespread standard for characters. It is used everywhere, from computer to phones, online and offline.

Unicode motto: 'Everyone in the world should be able to use their own language on phones and computers.'

PHP supports unicode in its syntax with the ``declare()`` ``encoding`` option. 

PHP may translate from and to Unicode to other character sets with extensions such as ``iconv``, ``intl``, mbstring. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html","name":"Unicode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Unicode is a standard to represent text","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Unicode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unicode"}]}]}</script>
```php
<?php

    $string = <<<XML
    <?xml version='1.0'?>
    <document>
        <cmd>login</cmd>
        <login>Richard</login>
    </document>
    XML;
    
    $xml = simplexml_load_string($string);
    print_r($xml);

?>
```

**[Documentation](https://home.unicode.org/)**
## See Also

+ [Unicode Escaping in PHP](https://mojoauth.com/escaping/unicode-escaping-in-php)
+ [Unicode in PHP](https://unicodefyi.com/guide/unicode-in-php/)

## Related

+ [SimpleXML](simplexml.html)
+ [DOM](domxml.html)
+ [XMLwriter](xmlwriter.html)
+ [XMLReader](xmlreader.html)
+ [Codepoint](codepoint.html)
+ [Emoji](emoji.html)
+ [Latin1](latin1.html)
+ [Multi-byte](multi-byte.html)
+ [declare()](declare.html)

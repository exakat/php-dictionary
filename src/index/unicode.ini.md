# Unicode
Unicode is a standard to represent text. It is maintained by the Unicode Consortium. Unicode provides a widespread standard for characters. It is used everywhere, from computer to phones, online and offline.

Unicode motto: 'Everyone in the world should be able to use their own language on phones and computers.'

PHP supports unicode in its syntax with the ``declare()`` ``encoding`` option. 

PHP may translate from and to Unicode to other character sets with extensions such as iconv, intl, mbstring. 

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unicode.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/unicode.ini.html","name":"Unicode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:31:12 +0000","dateModified":"Mon, 20 Jul 2026 08:31:12 +0000","description":"Unicode is a standard to represent text","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Unicode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [SimpleXML](simplexml.ini.html)
+ [DOM](domxml.ini.html)
+ [XMLwriter](xmlwriter.ini.html)
+ [XMLReader](xmlreader.ini.html)
+ [Codepoint](codepoint.ini.html)
+ [Emoji](emoji.ini.html)
+ [Latin1](latin1.ini.html)
+ [Multi-byte](multi-byte.ini.html)
+ [declare()](declare.ini.html)

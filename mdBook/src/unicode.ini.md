# Unicode
Unicode is a standard to represent text. It is maintained by the Unicode Consortium. Unicode provides a widespread standard for characters. It is used everywhere, from computer to phones, online and offline.

Unicode motto: 'Everyone in the world should be able to use their own language on phones and computers.'

PHP supports unicode in its syntax with the ``declare()`` ``encoding`` option. 

PHP may translate from and to Unicode to other character sets with extensions such as iconv, intl, mbstring. 

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

## See Also

+ [Unicode Escaping in PHP](https://mojoauth.com/escaping/unicode-escaping-in-php)
+ [Unicode in PHP](https://unicodefyi.com/guide/unicode-in-php/)

Related : [SimpleXML](SimpleXML), [DOM](DOM), [XMLwriter](XMLwriter), [XMLReader](XMLReader), [Codepoint](Codepoint), [Emoji](Emoji), [Latin1](Latin1), [Multi-byte](Multi-byte), [declare()](declare())

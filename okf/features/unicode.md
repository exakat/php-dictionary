---
type: "PHP Feature"
title: "Unicode"
description: "Unicode is a standard to represent text."
resource: "https://home.unicode.org/"
tags: ["standard", "encoding"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Unicode

Unicode is a standard to represent text. It is maintained by the Unicode Consortium. Unicode provides a widespread standard for characters. It is used everywhere, from computer to phones, online and offline.

Unicode motto: 'Everyone in the world should be able to use their own language on phones and computers.'

PHP supports unicode in its syntax with the ``declare()`` ``encoding`` option. 

PHP may translate from and to Unicode to other character sets with extensions such as ``iconv``, ``intl``, mbstring.

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

## Documentation
- [https://home.unicode.org/](https://home.unicode.org/)

## See Also
- [Unicode Escaping in PHP](https://mojoauth.com/escaping/unicode-escaping-in-php)
- [Unicode in PHP](https://unicodefyi.com/guide/unicode-in-php/)

## Related
- [SimpleXML](/features/simplexml.md)
- [DOM](/features/domxml.md)
- [XMLwriter](/features/xmlwriter.md)
- [XMLReader](/features/xmlreader.md)
- [Codepoint](/features/codepoint.md)
- [Emoji](/features/emoji.md)
- [Latin1](/features/latin1.md)
- [Multi-byte](/features/multi-byte.md)
- [declare()](/features/declare.md)


---
type: "extension"
title: "SimpleXML"
description: "The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators."
resource: "https://www.php.net/manual/en/book.simplexml.php"
tags: ["extension", "dom"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SimpleXML

The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.

```php
<?php
$books = new SimpleXMLElement('<?xml version=\1.0\?>
<books>
<book>
<title>Les miserables</title>
<genre>Novel</genre>
</book>
<book>
<title>The old man and the sea</title>
<genre>Novel</genre>
</book>
<book>
<title>The journey to the west</title>
<genre>Epic</genre>
</book>
</books>');

echo $movies->books[0]->title;
?>
```

## Documentation
- [https://www.php.net/manual/en/book.simplexml.php](https://www.php.net/manual/en/book.simplexml.php)

## See Also
- [PHP Master | Parsing XML With SimpleXML](https://www.sitepoint.com/parsing-xml-with-simplexml/)

## Related
- [XMLwriter](/features/xmlwriter.md)
- [XMLReader](/features/xmlreader.md)
- [Extensible Markup Language (XML)](/features/xml.md)
- [Unicode](/features/unicode.md)
- [Document Object Model (DOM)](/features/dom.md)
- [DOM](/features/domxml.md)

## Details
- PHP since: 5.0+


# Extensible Markup Language (XML)
XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use.

PHP offers several set of functions to handle XML: ``domxml``, ``simplexml``, ``xmlreader``, ``xmlwriter``.
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

+ [PHP XML Tutorial: Create, Parse, Read with Example](https://www.guru99.com/php-and-xml.html)

Related : [SimpleXML](SimpleXML), [DOM](DOM), [XMLwriter](XMLwriter), [XMLReader](XMLReader), [Schema](Schema), [sitemap](sitemap), [Simple Object Access Protocol (SOAP)](Simple Object Access Protocol (SOAP)), [YAML Ain't Markup Language (YAML)](YAML Ain't Markup Language (YAML)), [Document Database](Document Database), [Document Object Model (DOM)](Document Object Model (DOM)), [Scalable Vector Graphics (SVG)](Scalable Vector Graphics (SVG))

# Extensible Markup Language (XML)
XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use.

PHP offers several set of functions to handle XML: ``domxml``, ``simplexml``, ``xmlreader``, ``xmlwriter``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/xml.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/xml.ini.html","name":"Extensible Markup Language (XML)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Extensible Markup Language (XML).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/refs.xml.php)**
## See Also

+ [PHP XML Tutorial: Create, Parse, Read with Example](https://www.guru99.com/php-and-xml.html)

## Related

+ [SimpleXML](simplexml.ini.html)
+ [DOM](domxml.ini.html)
+ [XMLwriter](xmlwriter.ini.html)
+ [XMLReader](xmlreader.ini.html)
+ [Schema](schema.ini.html)
+ [sitemap](sitemap.ini.html)
+ [Simple Object Access Protocol (SOAP)](soap.ini.html)
+ [YAML Ain't Markup Language (YAML)](yaml.ini.html)
+ [Document Database](document-database.ini.html)
+ [Document Object Model (DOM)](dom.ini.html)
+ [Scalable Vector Graphics (SVG)](svg.ini.html)

## Related packages

+ [symfony/dom-crawler](https://packagist.org/packages/symfony/dom-crawler)
+ [spatie/array-to-xml](https://packagist.org/packages/spatie/array-to-xml)
+ [robrichards/xmlseclibs](https://packagist.org/packages/robrichards/xmlseclibs)
+ [sabre/xml](https://packagist.org/packages/sabre/xml)

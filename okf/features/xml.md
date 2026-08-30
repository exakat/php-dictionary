---
type: "acronym"
title: "Extensible Markup Language (XML)"
description: "XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use."
resource: "https://www.php.net/manual/en/refs.xml.php"
tags: ["acronym", "format"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Extensible Markup Language (XML)

XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use.

PHP offers several sets of functions to handle XML: ``domxml``, ``simplexml``, ``xmlreader``, ``xmlwriter``.

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
- [https://www.php.net/manual/en/refs.xml.php](https://www.php.net/manual/en/refs.xml.php)

## See Also
- [PHP XML Tutorial: Create, Parse, Read with Example](https://www.guru99.com/php-and-xml.html)

## Related
- [SimpleXML](/features/simplexml.md)
- [DOM](/features/domxml.md)
- [XMLwriter](/features/xmlwriter.md)
- [XMLReader](/features/xmlreader.md)
- [Schema](/features/schema.md)
- [sitemap](/features/sitemap.md)
- [Simple Object Access Protocol (SOAP)](/features/soap.md)
- [YAML Ain't Markup Language (YAML)](/features/yaml.md)
- [Document Database](/features/document-database.md)
- [Document Object Model (DOM)](/features/dom.md)
- [Scalable Vector Graphics (SVG)](/features/svg.md)
- [AJAX](/features/ajax.md)
- [Interoperability](/features/interoperability.md)
- [RDF (Resource Description Framework)](/features/rdf.md)
- [Security Assertion Markup Language (SAML)](/features/saml.md)

## Details
- Packagist: [symfony/dom-crawler](https://packagist.org/packages/symfony/dom-crawler)
- Packagist: [spatie/array-to-xml](https://packagist.org/packages/spatie/array-to-xml)
- Packagist: [robrichards/xmlseclibs](https://packagist.org/packages/robrichards/xmlseclibs)
- Packagist: [sabre/xml](https://packagist.org/packages/sabre/xml)


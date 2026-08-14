# JsonSerializable
The ``JsonSerializable`` interface is used to customize how an object is serialized into JSON using ``json_encode()``.

``JsonSerializable`` simplifies the conversion to JSON by introducing a method to prepare the data. These data may be based on the properties of the object, but they may also change these names, create virtual and hide existing properties; the values may also be formatted to fit any specification.

There is no reverse method, where a JSON representation is converted into an object. It has to be done in a custom method.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonserializable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jsonserializable.html","name":"JsonSerializable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The JsonSerializable interface is used to customize how an object is serialized into JSON using json_encode()","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/JsonSerializable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"jsonserializable"}]}]}</script>
```php
<?php

class Point implements JsonSerializable {
    public function __construct(
        private int $x, 
        private int $y,
        ) {
    }

    public function jsonSerialize(): mixed {
        return [
            'latitude' => $this->x,
            'longitude' => $this->y
        ];
    }
}

$point = new Point(10, 20);
echo json_encode($point); // {latitude:10,longitude:20}

?>
```

**[Documentation](https://www.php.net/manual/en/class.jsonserializable.php)**
## See Also

+ [How to Use the JsonSerializable Interface](https://www.sitepoint.com/use-jsonserializable-interface/)
+ [The Problem with JsonSerializable and Doctrine when using Symfony](https://theiconic.tech/the-problem-with-jsonserializable-and-doctrine-when-using-symfony-ad760e986b04)

## Related

+ [JavaScript Object Notation (JSON)](json.html)
+ [Serialization](serialization.html)
+ [Parquet](parquet.html)
+ [PHP Native Interfaces](php-interface.html)

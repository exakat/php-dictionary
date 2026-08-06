# Asymmetric Property
An asymmetric property is a property that specify the asymmetric visibility. This means that the property has a different visibility for read and for write. By default, visibility is symmetric: identical to write and read.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/asymmetric-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/asymmetric-property.html","name":"Asymmetric Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:42 +0000","dateModified":"Fri, 19 Jun 2026 21:24:42 +0000","description":"An asymmetric property is a property that specify the asymmetric visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Asymmetric Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    class X {
        public private(set) int $property;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.properties.php)**
## Related

+ [Asymmetric Visibility](asymmetric-visibility.ini.html)

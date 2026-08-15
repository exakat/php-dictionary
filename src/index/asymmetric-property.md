# Asymmetric Property
An asymmetric property is a property that specifies the asymmetric visibility. This means that the property has a different visibility for read and for write. By default, visibility is symmetric: identical to write and read.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asymmetric-property.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asymmetric-property.html","name":"Asymmetric Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:00:29 +0000","dateModified":"Tue, 11 Aug 2026 21:00:29 +0000","description":"An asymmetric property is a property that specifies the asymmetric visibility","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Asymmetric Property.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"asymmetric-property"}]}]}</script>
```php
<?php

    class X {
        public private(set) int $property;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.properties.php)**
## Related

+ [Asymmetric Visibility](asymmetric-visibility.html)

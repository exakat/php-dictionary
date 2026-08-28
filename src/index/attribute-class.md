# Attribute Class
This is a native PHP attribute, which tells the engine that a class is a PHP attribute.

This attribute is not necessary to make a class a valid attribute. Yet, it is recommended to use it and make the classes explicitly attributes.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute-class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute-class.html","name":"Attribute Class","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"This is a native PHP attribute, which tells the engine that a class is a PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute-class.html"]}],"keywords":["attribute","php attribute"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/override.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-attribute.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.attributes.classes.php"},{"@type":"CreativeWork","name":"Attributes in PHP 8","url":"https:\/\/php.watch\/articles\/php-attributes"},{"@type":"CreativeWork","name":"A guide to PHP attributes","url":"https:\/\/www.honeybadger.io\/blog\/php-attributes-guide\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"attribute-class"}]}]}</script>
```php
<?php

    #[Attribute]
    class MyAttribute { }
    
    #[MyAttribute]
    class MyClass { }

?>
```

**[Documentation](https://www.php.net/manual/en/language.attributes.classes.php)**
## See Also

+ [Attributes in PHP 8](https://php.watch/articles/php-attributes)
+ [A guide to PHP attributes](https://www.honeybadger.io/blog/php-attributes-guide/)

## Related

+ [Override Attribute](override.html)
+ [NoDiscard](nodiscard.html)
+ [Attribute](attribute.html)
+ [PHP Native Attributes](php-attribute.html)

# Attribute Class
This is a native PHP attribute, which tells the engine that a class is a PHP attribute.

This attribute is not necessary to make a class a valid attribute. Yet, it is recommended to use it and make the classes explicitly attributes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/attribute-class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/attribute-class.ini.html","name":"Attribute Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"This is a native PHP attribute, which tells the engine that a class is a PHP attribute","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Attribute Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Override Attribute](override.ini.html)
+ [NoDiscard](nodiscard.ini.html)
+ [Attribute](attribute.ini.html)
+ [PHP Native Attributes](php-attribute.ini.html)

# Attribute
Attributes are machine readable options that may be added PHP code. Since PHP 8.0, they are accessible from PHP. 

Attributes provide extra and customisable options for the PHP engine, static analysis tools and coders alike. 

Attributes are a modern version of the phpdoc comment blocks.

Attributes are backward compatible: they can be used in any PHP version, and are ignored when not supported. 

Attributes may or may not have a supporting class: attributes may be used for their semantic value, or with related code.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/attribute.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/attribute.ini.html","name":"Attribute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 10:07:45 +0000","dateModified":"Mon, 06 Jul 2026 10:07:45 +0000","description":"Attributes are machine readable options that may be added PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Attribute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    #[Attribute]
    class X {} // this class is an Attributes
    
    #[X]  // This attribute may be instanciated, and executed
    #[Z]  // This attribute serves only as a flag. No class is available.
    class Y {} // this class is an Attributes

?>
```

**[Documentation](https://www.php.net/manual/en/language.attributes.overview.php)**
## See Also

+ [PHP Native Attributes](https://www.exakat.io/en/php-native-attributes-quick-reference/)
+ [Using PHP Attributes instead of Annotations for Static Analysis](https://www.linkedin.com/pulse/using-php-attributes-instead-annotations-static-carlos-granados-qanwe/)
+ [Unlocking the Power of Attributes in PHP](https://itsimiro.medium.com/unlocking-the-power-of-attributes-in-php-a6af57225bbf)
+ [PHP Language Extensions](https://github.com/DaveLiddament/php-language-extensions)
+ [Playtime with PHP Attributes](https://jump24.co.uk/journal/playtime-with-php-attributes/)
+ [A guide to PHP attributes](https://www.honeybadger.io/blog/php-attributes-guide/)

## Related

+ [PHPdoc](phpdoc.ini.html)
+ [PHP Native Attribute](php-native-attribute.ini.html)
+ [Annotations](annotation.ini.html)
+ [Attribute Class](attribute-class.ini.html)
+ [NoDiscard](nodiscard.ini.html)
+ [Properties](property.ini.html)
+ [delayedtargetvalidation](delayedtargetvalidation.ini.html)
+ [Nested Attributes](nested-attribute.ini.html)
+ [Nesting](nesting.ini.html)
+ [Sensitive Parameter](sensitiveparameter.ini.html)
+ [Code Generation](code-generation.ini.html)
+ [Metaclass](metaclass.ini.html)
+ [Metaprogramming](metaprogramming.ini.html)
+ [Template Metaprogramming (TMP)](template-metaprogramming.ini.html)

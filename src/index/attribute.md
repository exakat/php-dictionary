# Attribute
Attributes are machine readable options that may be added to PHP code. Since PHP 8.0, they are accessible from PHP. 

Attributes provide extra and customisable options for the PHP engine, static analysis tools and coders alike. 

Attributes are a modern version of the phpdoc comment blocks.

Attributes are backward compatible: they can be used in any PHP version, and are ignored when not supported. 

Attributes may or may not have a supporting class: attributes may be used for their semantic value, or with related code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html","name":"Attribute","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:53:01 +0000","dateModified":"Tue, 11 Aug 2026 20:53:01 +0000","description":"Attributes are machine readable options that may be added to PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Attribute.html"]}],"keywords":["attribute","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpdoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-native-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/annotation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nodiscard.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/property.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delayedtargetvalidation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nested-attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/nesting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sensitiveparameter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-generation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaclass.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template-metaprogramming.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.attributes.overview.php"},{"@type":"CreativeWork","name":"PHP Native Attributes","url":"https:\/\/www.exakat.io\/en\/php-native-attributes-quick-reference\/"},{"@type":"CreativeWork","name":"Using PHP Attributes instead of Annotations for Static Analysis","url":"https:\/\/www.linkedin.com\/pulse\/using-php-attributes-instead-annotations-static-carlos-granados-qanwe\/"},{"@type":"CreativeWork","name":"Unlocking the Power of Attributes in PHP","url":"https:\/\/itsimiro.medium.com\/unlocking-the-power-of-attributes-in-php-a6af57225bbf"},{"@type":"CreativeWork","name":"PHP Language Extensions","url":"https:\/\/github.com\/DaveLiddament\/php-language-extensions"},{"@type":"CreativeWork","name":"Playtime with PHP Attributes","url":"https:\/\/jump24.co.uk\/journal\/playtime-with-php-attributes\/"},{"@type":"CreativeWork","name":"A guide to PHP attributes","url":"https:\/\/www.honeybadger.io\/blog\/php-attributes-guide\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"attribute"}]}]}</script>
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

+ [PHPdoc](phpdoc.html)
+ [PHP Native Attribute](php-native-attribute.html)
+ [Annotations](annotation.html)
+ [Attribute Class](attribute-class.html)
+ [NoDiscard](nodiscard.html)
+ [Properties](property.html)
+ [delayedtargetvalidation](delayedtargetvalidation.html)
+ [Nested Attributes](nested-attribute.html)
+ [Nesting](nesting.html)
+ [Sensitive Parameter](sensitiveparameter.html)
+ [Code Generation](code-generation.html)
+ [Metaclass](metaclass.html)
+ [Metaprogramming](metaprogramming.html)
+ [Template Metaprogramming (TMP)](template-metaprogramming.html)

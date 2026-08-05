# Annotations
PHP annotations are a system to provide meta data about code, in a way that is programmatically processable. 

PHP annotations are based on PHPDoc comment's syntax, and were later partially modernized by PHP attributes.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/annotation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/annotation.ini.html","name":"Annotations","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"PHP annotations are a system to provide meta data about code, in a way that is programmatically processable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Annotations.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

/**
 * <description of foo>
 * @param int $a : <description of the parameter>
 * @return int : <description of the returned value>
 */
function foo(int $a) {
    
    // This annotation cannot be turned into an attribute
    /**
     * @var int $b : <description of the variable>
     */
     $b = $a + 1;
     
     return $b;
}

?>
```

**[Documentation](https://en.wikipedia.org/wiki/PHPDoc)**
## See Also

+ [Understanding annotations](https://php-annotations.readthedocs.io/en/latest/UsingAnnotations.html)
+ [Annotating Types via PHP Doc Comments](https://scrutinizer-ci.com/docs/tools/php/php-analyzer/guides/annotating_code)

## Related

+ [Attribute](attribute.ini.html)
+ [PHPdoc](phpdoc.ini.html)

## Related packages

+ [php-annotations/php-annotations](https://packagist.org/packages/php-annotations/php-annotations)

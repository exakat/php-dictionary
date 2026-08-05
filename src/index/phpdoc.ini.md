# PHPdoc
PHPDoc is a style of PHP comments. Those comments are delimited by ``/** */``. 

PHPdoc comments are different from the other styles of PHP comments in their syntax. They are also used for PHP annotations, and are sometimes confused with them. 

PHPDoc annotations are an adaptation of Javadoc for the PHP programming language. It is a formal way to comment specific PHP structures, that is machine readable.

PHPDoc has a special token, to make it easier to extract it from the code.

PHPdoc may be exploited by automated documentation tools, or static analyzer, IDE.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/phpdoc.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/phpdoc.ini.html","name":"PHPdoc","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"PHPDoc is a style of PHP comments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHPdoc.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
/**
 * Check if a number is prime
 *
 * @param int     $int       The number to test
 *
 * @return bool : is it prime or not
 */
 function prime(int $int): bool {
     // ...
 }


?>
```

**[Documentation](https://en.wikipedia.org/wiki/PHPDoc)**
## See Also

+ [Introduction to PHP Annotations](https://www.educba.com/php-annotations/)
+ [phpDocumentor](https://www.phpdoc.org/)

## Related

+ [Attribute](attribute.ini.html)
+ [Annotations](annotation.ini.html)
+ [Comments](comment.ini.html)
+ [Autocompletion](autocompletion.ini.html)
+ [PHP Manual](php-manual.ini.html)
+ [Technical Reference](technical-reference.ini.html)
+ [Type Inference](type-inference.ini.html)

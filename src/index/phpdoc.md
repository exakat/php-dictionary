# PHPdoc
PHPDoc is a style of PHP comments. Those comments are delimited by ``/** */``. 

PHPdoc comments are different from the other styles of PHP comments in their syntax. They are also used for PHP annotations, and are sometimes confused with them. 

PHPDoc annotations are an adaptation of Javadoc for the PHP programming language. It is a formal way to comment specific PHP structures, that is machine readable.

PHPDoc has a special token, to make it easier to extract it from the code.

PHPdoc may be exploited by automated documentation tools, or static analyzer, IDE.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpdoc.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpdoc.html","name":"PHPdoc","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"PHPDoc is a style of PHP comments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHPdoc.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"PHPdoc"}]}]}</script>
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

+ [Attribute](attribute.html)
+ [Annotations](annotation.html)
+ [Comments](comment.html)
+ [Autocompletion](autocompletion.html)
+ [PHP Manual](php-manual.html)
+ [Technical Reference](technical-reference.html)
+ [Type Inference](type-inference.html)

# PHPdoc
PHPDoc is a style of PHP comments. Those comments are delimited by ``/** */``. 

PHPdoc comments are different from the other styles of PHP comments in their syntax. They are also used for PHP annotations, and are sometimes confused with them. 

PHPDoc annotations are an adaptation of Javadoc for the PHP programming language. It is a formal way to comment specific PHP structures, that is machine readable.

PHPDoc has a special token, to make it easier to extract it from the code.

PHPdoc may be exploited by automated documentation tools, or static analyzer, IDE.
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

## See Also

+ [Introduction to PHP Annotations](https://www.educba.com/php-annotations/)
+ [phpDocumentor](https://www.phpdoc.org/)

Related : [Attribute](Attribute), [Annotations](Annotations), [Comments](Comments), [Autocompletion](Autocompletion), [PHP Manual](PHP Manual), [Technical Reference](Technical Reference), [Type Inference](Type Inference)

# Annotations
PHP annotations are a system to provide meta data about code, in a way that is programmatically processable. 

PHP annotations are based on PHPDoc comment's syntax, and were later partially modernized by PHP attributes.
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

## See Also

+ [Understanding annotations](https://php-annotations.readthedocs.io/en/latest/UsingAnnotations.html)
+ [Annotating Types via PHP Doc Comments](https://scrutinizer-ci.com/docs/tools/php/php-analyzer/guides/annotating_code)

Related : [Attribute](Attribute), [PHPdoc](PHPdoc)

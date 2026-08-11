# is\_array()
``is_array()`` is a PHP native function that checks whether a variable is of type array. It returns ``true`` if the value is an array, ``false`` otherwise.

This function is essential for type checking and validation before performing array operations. It is commonly used in:

+ Input validation to ensure expected data structures
+ Conditional logic before array manipulation functions
+ Type-safe function implementations
+ Preventing errors when working with mixed-type data

``is_array()`` distinguishes arrays from other PHP data types, including objects, even if those objects implement ``ArrayAccess`` or ``IteratorAggregate`` interfaces. For checking whether a value is traversable or can be used in a ``foreach`` loop, consider ``is_iterable()`` instead.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_array.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_array.html","name":"is_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:20:33 +0000","dateModified":"Thu, 16 Jul 2026 14:20:33 +0000","description":"``is_array()`` is a PHP native function that checks whether a variable is of type array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/is_array().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"is_array"}]}]}</script>
```php
<?php

    $data = [1, 2, 3];
    echo is_array($data) ? 'Array' : 'Not an array'; // Array

    $string = 'hello';
    echo is_array($string) ? 'Array' : 'Not an array'; // Not an array

    // Validation before array operations
    $input = json_decode('[1, 2, 3]', true);
    if (is_array($input)) {
        $result = array_map(fn($n) => $n * 2, $input);
        print_r($result);
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-array.php)**
## See Also

+ [Type comparison tables](https://www.php.net/manual/en/types.comparisons.php)

## Related

+ [Array, []](array.html)
+ [is\_object()](is_object.html)
+ [is\_string()](is_string.html)
+ [is\_int()](is_int.html)
+ [is\_bool()](is_bool.html)
+ [is\_iterable()](is_iterable.html)
+ [gettype()](gettype.html)
+ [Type Checking](type-checking.html)
+ [ArrayAccess](arrayaccess.html)
+ [ArrayObject](arrayobject.html)
+ [Validation](validation.html)

# array\_combine()
``array_combine()`` creates an array from an array of keys and an array of values. 

Both arguments are treated as lists: their respective keys are discarded, and only their positions are used. The arrays are not sorted. 

Both arguments must have the same number of elements.

``array_combine()`` is the opposite of ``array_keys`` and ``array_values`` together.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_combine.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_combine.ini.html","name":"array_combine()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_combine()`` creates an array from an array of keys and an array of values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/array_combine().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // adapted from the PHP manual example
    $a = ['green',  4 => 'red', 'c' => 'yellow'];
    $b = ['avocado', 'apple', 'banana'];
    $c = array_combine($a, $b);

    print_r($c);
    
    /**
       Array
    (
        [green] => avocado
        [red] => apple
        [yellow] => banana
    )
    */
    
    var_dump($a === array_combine(array_keys($a), array_values($a)));
    
?>
```

**[Documentation](https://www.php.net/manual/en/function.array-combine.php)**
## Related

+ [array\_keys()](array_keys.ini.html)
+ [array\_values()](array_values.ini.html)
+ [array\_column](array_column.ini.html)

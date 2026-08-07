# array\_combine()
``array_combine()`` creates an array from an array of keys and an array of values. 

Both arguments are treated as lists: their respective keys are discarded, and only their positions are used. The arrays are not sorted. 

Both arguments must have the same number of elements.

``array_combine()`` is the opposite of ``array_keys`` and ``array_values`` together.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html","name":"array_combine()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_combine()`` creates an array from an array of keys and an array of values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"array_combine()"}]}]}</script>
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

+ [array\_keys()](array_keys.html)
+ [array\_values()](array_values.html)
+ [array\_column](array_column.html)

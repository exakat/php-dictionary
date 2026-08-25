# array\_combine()
``array_combine()`` creates an array from an array of keys and an array of values. 

Both arguments are treated as lists: their respective keys are discarded, and only their positions are used. The arrays are not sorted. 

Both arguments must have the same number of elements.

``array_combine()`` is the opposite of ``array_keys`` and ``array_values`` together.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html","name":"array_combine()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 05:04:01 +0000","dateModified":"Mon, 24 Aug 2026 05:04:01 +0000","description":"array_combine() creates an array from an array of keys and an array of values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_combine.html"]}],"keywords":["php function","array"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_keys.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_values.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_column.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.array-combine.php"},{"@type":"CreativeWork","name":"PHP array_combine() Function - W3Schools","url":"https:\/\/www.w3schools.com\/php\/func_array_combine.asp"},{"@type":"CreativeWork","name":"PHP's array_combine() Function: A Complete Guide","url":"https:\/\/reintech.io\/blog\/phps-array-combine-function-a-complete-guide"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"array_combine"}]}]}</script>
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
## See Also

+ [PHP array_combine() Function - W3Schools](https://www.w3schools.com/php/func_array_combine.asp)
+ [PHP's array_combine() Function: A Complete Guide](https://reintech.io/blog/phps-array-combine-function-a-complete-guide)

## Related

+ [array\_keys()](array_keys.html)
+ [array\_values()](array_values.html)
+ [array\_column](array_column.html)

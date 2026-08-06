# Batch
Batch processing refers to the treatment of several items at the same time, instead of one at a time.

Batch may mean all at the same time, or it may refers to processing the elements in several small groups. 

Processing in batch is efficient when the overhead of an operation is high per unit, such as storing one row at a time in a database, or when processing everything at once requires too much resources.

Processing in intermediate size batch may also be more efficient than processing everything by unit, or as a whole. It is related to the problem of ``the elephpant and the bananas``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/batch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/batch.html","name":"Batch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:57:40 +0000","dateModified":"Thu, 09 Jul 2026 08:57:40 +0000","description":"Batch processing refers to the treatment of several items at the same time, instead of one at a time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Batch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Processing the array one by one
    foreach($array as $a) {
        $database->store($a);
    }
    
    // Processing the array in one time
    $database->store($array);
    
    // Processing the array by batch of 10
    $chunks = array_chunk($array, 10);
    foreach($chunks as $chunk) {
        $database->store($chunk);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Batch_processing)**
## See Also

+ [The Elephant and the Bananas](https://puzzlesquant.substack.com/p/the-elephant-and-the-bananas)

## Related

+ [Dataset](dataset.ini.html)
+ [N+1 Query Problem](n-query.ini.html)

## Related packages

+ [yokai-php/batch](https://packagist.org/packages/yokai-php/batch)

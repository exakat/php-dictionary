# RecursiveTreeIterator
The ``RecursiveTreeIterator`` allows iterating over a ``RecursiveIterator`` to generate an ASCII graphic tree. This is a convenient and native way to display a tree-like structure.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivetreeiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivetreeiterator.html","name":"RecursiveTreeIterator","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 13:33:58 +0000","dateModified":"Tue, 25 Aug 2026 13:33:58 +0000","description":"The RecursiveTreeIterator allows iterating over a RecursiveIterator to generate an ASCII graphic tree","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivetreeiterator.html"]}],"keywords":["iterator","spl"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursiveiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directoryiterator.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.recursivetreeiterator.php"},{"@type":"CreativeWork","name":"Standard PHP Library From A to Z","url":"https:\/\/tuhinbepari.medium.com\/standard-php-library-from-a-to-z-9bcb4d7b3aa8"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"recursivetreeiterator"}]}]}</script>
```php
<?php

    $data = [
        'fruit' => [
            'apple',
            'banana'
        ],
        'vegetables' => [
            'carrot',
            'broccoli',
            'leafy' => [
                'spinach',
                'lettuce'
            ]
        ]
    ];
    
    // Wrap the array in a RecursiveArrayIterator
    $iterator = new RecursiveArrayIterator($data);
    
    // Create a RecursiveTreeIterator
    $treeIterator = new RecursiveTreeIterator(
        $iterator,
        RecursiveTreeIterator::SELF_FIRST
    );
    
    // Loop and print the tree
    foreach ($treeIterator as $key => $value) {
        echo $treeIterator->getPrefix() . "$key: $value\n";
    }
    
    /**
    |-- fruit
    |   |-- 0: apple
    |   |-- 1: banana
    |-- vegetables
    |   |-- 0: carrot
    |   |-- 1: broccoli
    |   |-- leafy
    |       |-- 0: spinach
    |       |-- 1: lettuce
    */

?>
```

**[Documentation](https://www.php.net/manual/en/class.recursivetreeiterator.php)**
## See Also

+ [Standard PHP Library From A to Z](https://tuhinbepari.medium.com/standard-php-library-from-a-to-z-9bcb4d7b3aa8)

## Related

+ [RecursiveIterator](recursiveiterator.html)
+ [DirectoryIterator](directoryiterator.html)
+ [Render](render.html)

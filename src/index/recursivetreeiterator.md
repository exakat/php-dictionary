# RecursiveTreeIterator
The ``RecursiveTreeIterator`` allows iterating over a ``RecursiveIterator`` to generate an ASCII graphic tree. This is a convenient and native way to display a tree-like structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivetreeiterator.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/recursivetreeiterator.html","name":"RecursiveTreeIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``RecursiveTreeIterator`` allows iterating over a ``RecursiveIterator`` to generate an ASCII graphic tree","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/RecursiveTreeIterator.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"recursivetreeiterator"}]}]}</script>
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

>
```

**[Documentation](https://www.php.net/manual/en/class.recursivetreeiterator.php)**
## See Also

+ [Standard PHP Library From A to Z](https://tuhinbepari.medium.com/standard-php-library-from-a-to-z-9bcb4d7b3aa8)

## Related

+ [RecursiveIterator](recursiveiterator.html)
+ [DirectoryIterator](directoryiterator.html)
+ [Render](render.html)

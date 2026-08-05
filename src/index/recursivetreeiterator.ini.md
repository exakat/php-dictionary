# RecursiveTreeIterator
The ``RecursiveTreeIterator`` allows iterating over a ``RecursiveIterator`` to generate an ASCII graphic tree. This is a convenient and native way to display a tree-like structure.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursivetreeiterator.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/recursivetreeiterator.ini.html","name":"RecursiveTreeIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``RecursiveTreeIterator`` allows iterating over a ``RecursiveIterator`` to generate an ASCII graphic tree","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/RecursiveTreeIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [RecursiveIterator](recursiveiterator.ini.html)
+ [DirectoryIterator](directoryiterator.ini.html)
+ [Render](render.ini.html)

# RecursiveTreeIterator
The ``RecursiveTreeIterator`` allows iterating over a ``RecursiveIterator`` to generate an ASCII graphic tree. This is a convenient and native way to display a tree-like structure.
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

## See Also

+ [Standard PHP Library From A to Z](https://tuhinbepari.medium.com/standard-php-library-from-a-to-z-9bcb4d7b3aa8)

Related : [RecursiveIterator](RecursiveIterator), [DirectoryIterator](DirectoryIterator), [Render](Render)

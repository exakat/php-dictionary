# ArrayAccess
``ArrayAccess`` is an interface that allows objects to be accessed like arrays using square brackets, similar to accessing elements in a regular array. When a class implements the ``ArrayAccess`` interface, it must provide methods to define how the object behaves when accessed like an array.

+ ``offsetExists($offset)``: this method is called to check if a specific offset exists in the object. It should return a boolean value: ``true`` if the offset exists, ``false`` otherwise.
+ ``offsetGet($offset)``: this method is called to try to retrieve the value associated with a specific offset. It should return the value at that offset.
+ ``offsetSet($offset, $value)``: this method is called to try to set a value for a specific offset. It takes two parameters: the offset and the value to be set.
+ ``offsetUnset($offset)``: this method is called to unset or remove a value associated with a specific offset.

Implementing ``ArrayAccess`` can be useful to create custom data structures or objects that mimic array behavior, providing a convenient and consistent way to work with data.

``ArrayAccess`` is often complemented with ``Countable``, to make the object yet even more like an array.
```php
<?php

class LimitedArray implements ArrayAccess {
    public $a = 1;
    public $b = 1;
    public $c = 1;

    public function offsetSet($offset, $value): void {
        if (in_array($offset, ['a', 'b', 'c'])) {
            $this->$offset = $value;
        }
        // else ignore
    }

    public function offsetExists($offset): bool {
        return in_array($offset, ['a', 'b', 'c']);
    }

    public function offsetUnset($offset): void {
        // do nothing
    }

    public function offsetGet($offset): mixed {
        if (in_array($offset, ['a', 'b', 'c'])) {
            return $this->$offset;
        }
    }
}

$limitedArray = new LimitedArray();

$limitedArray['a'] = 3;
$limitedArray['d'] = 13;

echo $limitedArray['a']; // 3
echo $limitedArray['d']; // null

?>
```

## See Also

+ [Building Custom Collection class in PHP](https://medium.com/@opadaalziede/building-custom-collection-class-in-php-908f4622efbd)

Related : [Countable Interface](Countable Interface), [Iterable](Iterable), [Associative Array](Associative Array), [PHP Native Interfaces](PHP Native Interfaces)

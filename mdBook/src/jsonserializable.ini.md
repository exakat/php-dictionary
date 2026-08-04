# JsonSerializable
The ``JsonSerializable`` interface is used to customize how an object is serialized into JSON using ``json_encode()``.

``JsonSerializable`` simplifies the conversion to JSON by introducing a method to prepare the data. These data may be based on the properties of the object, but they may also change these names, create virtual and hide existing properties; the values may also be formatted to fit any specification.

There is no reverse method, where a JSON representation is converted into an object. It has to be done in a custom method.
```php
<?php

class Point implements JsonSerializable {
    public function __construct(
        private int $x, 
        private int $y,
        ) {
    }

    public function jsonSerialize(): mixed {
        return [
            'latitude' => $this->x,
            'longitude' => $this->y
        ];
    }
}

$point = new Point(10, 20);
echo json_encode($point); // {latitude:10,longitude:20}

?>
```

## See Also

+ [How to Use the JsonSerializable Interface](https://www.sitepoint.com/use-jsonserializable-interface/)
+ [The Problem with JsonSerializable and Doctrine when using Symfony](https://theiconic.tech/the-problem-with-jsonserializable-and-doctrine-when-using-symfony-ad760e986b04)

Related : [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Serialization](Serialization), [Parquet](Parquet), [PHP Native Interfaces](PHP Native Interfaces)

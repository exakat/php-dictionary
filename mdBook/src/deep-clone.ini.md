# Deep Clone
A deep clone is an object cloning, where the cloned object also clone its own object properties. This prevents the original object to share data with the cloned one, yet it is slower to process.

Deep cloning is achieved by using the ``__clone`` magic method. By default, PHP does shallow clones.
```php
<?php

    class Dog {
        private $name = '';
        private Address $address;
    
        function __construct(string $name, Address $address) {
            $this->address->setName($address);
        }
        
        function moves(string $address) {
            $this->address->setName($address);
        }
    
        function __clone() {
            $this->address = clone $this->address;
        }
    }
    
    $spike = new Dog('Spike', new Address('Acme city'));
    $medor = clone $spike;
    $medor->moves('Upstate farm');
    
    // spike and medor do now share the same address

?>
```

## See Also

+ [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)
+ [Native DeepCloner vs. Manual Serialization: What You Need to Know](https://hackernoon.com/native-deepcloner-vs-manual-serialization-what-you-need-to-know)

Related : [Magic Methods](Magic Methods), [__clone() Method](__clone() Method), [Clone](Clone), [Serialization](Serialization), [Shallow Clone](Shallow Clone)

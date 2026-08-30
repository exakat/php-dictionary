---
type: "PHP Feature"
title: "Deep Clone"
description: "A deep clone is an object cloning, where the cloned object also clone its own object properties."
resource: "https://www.php.net/manual/en/language.oop5.cloning.php"
tags: ["class"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.cloning.php](https://www.php.net/manual/en/language.oop5.cloning.php)

## See Also
- [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)
- [Native DeepCloner vs. Manual Serialization: What You Need to Know](https://hackernoon.com/native-deepcloner-vs-manual-serialization-what-you-need-to-know)

## Related
- [Magic Methods](/features/magic-method.md)
- [__clone() Method](/features/__clone.md)
- [Clone](/features/clone.md)
- [Serialization](/features/serialization.md)
- [Shallow Clone](/features/shallow-clone.md)


---
type: "PHP Feature"
title: "Shallow Clone"
description: "A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object."
resource: "https://www.php.net/manual/en/language.oop5.cloning.php"
tags: ["object"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Shallow Clone

A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object. This is a fast way to share data between objects.

Shallow cloning is the default behavior.

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
    
        // no __clone method
    }
    
    $spike = new Dog('Spike', new Address('Acme city'));
    $medor = clone $spike;
    $medor->moves('Upstate farm');
    
    // spike and medor are still at the same address

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.cloning.php](https://www.php.net/manual/en/language.oop5.cloning.php)

## See Also
- [How to clone an object in PHP](https://linuxhint.com/cloning_objects_php/)

## Related
- [Magic Methods](/features/magic-method.md)
- [__clone() Method](/features/__clone.md)
- [Deep Clone](/features/deep-clone.md)
- [Clone](/features/clone.md)


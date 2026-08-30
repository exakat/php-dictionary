---
type: "PHP Feature"
title: "Concrete Class"
description: "The contrary to ``abstract`` is concrete."
resource: "https://www.php.net/manual/en/language.oop5.abstract.php"
tags: ["classes"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Concrete Class

The contrary to ``abstract`` is concrete. PHP has abstract classes and methods. This is the default state of a method or class, when it has a code block with implementation. It also has no specific keyword to designate it.

```php
<?php

    abstract class AbstractClass
    {
        // Concrete method
        public function printOut() {
            print $this->getValue() . "\n";
        }
    
        // Method without an implementation
        abstract protected function getValue();
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.abstract.php](https://www.php.net/manual/en/language.oop5.abstract.php)

## See Also
- [Understanding Concrete Classes in PHP.](https://medium.com/@msaimhashmi/understanding-concrete-classes-in-php-f97d73d21aa0)

## Related
- [Abstract Keyword](/features/abstract.md)
- [Abstract Class](/features/abstract-class.md)
- [Abstract Method](/features/abstract-method.md)
- [Concrete Method](/features/concrete-method.md)
- [Program To Interface](/features/program-to-interface.md)


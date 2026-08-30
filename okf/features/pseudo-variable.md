---
type: "PHP Feature"
title: "Pseudo-variable"
description: "A pseudo-variable is a term used to describe a variable that looks like a variable but does not represent one."
resource: "https://www.php.net/manual/en/language.oop5.basic.php"
tags: ["variable"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Pseudo-variable

A pseudo-variable is a term used to describe a variable that looks like a variable but does not represent one. Instead, it is a special case that has a specific meaning within its context. ``$this`` is the only pseudo-variable: it represents the object that is called.

```php
<?php

    class X {
        private string $name;
        
        function __construct($name) {
            $this->name = $name;
        }
        
        function foo() {
            // $this represents any object of type x
            print $this->name;
        }
    }
    
    // $a represents only the object 'a', type x, until it is reassigned
    $a = new x('a');
    
    // $b represents only the object 'b', type x, until it is reassigned
    $b = new x('b');

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.basic.php](https://www.php.net/manual/en/language.oop5.basic.php)

## See Also
- [Understanding of self and this in PHP](https://medium.com/@programmingdive/understanding-of-self-and-this-in-php-a310aaf509b1)
- [When to Use self and $this in PHP](https://www.w3docs.com/snippets/php/when-to-use-self-and-this-in-php)

## Related
- [Variables](/features/variable.md)


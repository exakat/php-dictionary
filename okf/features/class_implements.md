---
type: "PHP Feature"
title: "class_implements()"
description: "``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes."
resource: "https://www.php.net/class_implements"
tags: ["reflection", "oop"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# class_implements()

``class_implements()`` returns an array of all interfaces implemented by a given class, including interfaces implemented by its parent classes. The keys and values of the returned array are both the interface names.

An optional second parameter, by default ``true``, controls whether the autoloader should be invoked if the class does not yet exist. Pass ``false`` to suppress autoloading.

``class_implements()`` returns ``false`` if the class does not exist and autoloading is disabled.

Related functions are ``class_parents()``, which returns parent classes, and ``class_uses()``, which returns traits used by the class.

```php
<?php

interface Countable {}
interface Stringable {}

class MyCollection implements Countable, Stringable {
    public function count(): int { return 0; }
    public function __toString(): string { return ''; }
}

$interfaces = class_implements(MyCollection::class);
// ['Countable' => 'Countable', 'Stringable' => 'Stringable']

// Also works with a string class name
$interfaces = class_implements('MyCollection');

// Works on instances too
$obj = new MyCollection();
$interfaces = class_implements($obj);

var_dump(isset($interfaces['Countable'])); // true

?>
```

## Documentation
- [https://www.php.net/class_implements](https://www.php.net/class_implements)

## See Also
- [class_implements - PHP Manual](https://www.php.net/manual/en/function.class-implements.php)

## Related
- [Interface](/features/interface.md)
- [implements](/features/implements.md)
- [Introspection](/features/introspection.md)

## Details
- PHP since: 5.1


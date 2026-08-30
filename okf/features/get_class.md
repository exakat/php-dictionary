---
type: "PHP Feature"
title: "get_class()"
description: "``get_class()`` is a PHP native function, that returns the name of the class of an object."
resource: "https://www.php.net/manual/en/function.get-class.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# get_class()

``get_class()`` is a PHP native function, that returns the name of the class of an object.

``get_class()`` returns the full name of the class, including its namespace and original letter cases. 

``get_class()`` may be replaced by the magic method ``__CLASS__`` when operating on ``$this``. It may also be replaced with an object in other situation, such as fetching a static constant, or instantiating a new object.

```php
<?php

namespace A\b;

class C {} 

$c = new C;
print get_class(); //A\b\C

$d = new $c;
print get_class(); //A\b\C

?>
```

## Documentation
- [https://www.php.net/manual/en/function.get-class.php](https://www.php.net/manual/en/function.get-class.php)

## See Also
- [PHP | get_class() Function](https://www.geeksforgeeks.org/php/php-get_class-function/)
- [Exploring PHP's get_class() Function: A Practical Guide](https://clouddevs.com/php/get_class-function/)

## Related
- [__CLASS__](/features/__class__.md)
- [$this](/features/$this.md)
- [get_class_vars()](/features/get_class_vars.md)
- [Introspection](/features/introspection.md)


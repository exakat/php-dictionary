---
type: "PHP Feature"
title: "Countable Interface"
description: "The ``Countable`` interface is a native built-in interface that allows objects to be counted using the ``count()`` function."
resource: "https://www.php.net/manual/en/class.countable.php"
tags: ["interface"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Countable Interface

The ``Countable`` interface is a native built-in interface that allows objects to be counted using the ``count()`` function. 

By implementing the ``Countable`` interface, a class defines custom logic for determining its count.

```php
<?php
class Collection implements Countable
{
    private $list = [];
    
    public function add($x) {
        $this->list[] = $x;
    }

    public function count()
    {
        return $this->count;
    }

}

$count = new Counter;
$count->inc();
$count->inc();

print count($count).PHP_EOL;

?>
```

## Documentation
- [https://www.php.net/manual/en/class.countable.php](https://www.php.net/manual/en/class.countable.php)

## See Also
- [Using the count() Function in PHP](https://pimylifeup.com/php-count/)

## Related
- [count()](/features/count.md)
- [Interface](/features/interface.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [ArrayAccess](/features/arrayaccess.md)


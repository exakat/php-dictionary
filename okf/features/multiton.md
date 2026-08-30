---
type: "PHP Feature"
title: "Multiton"
description: "A multiton is a singleton which holds several instances of itself."
resource: "https://en.wikipedia.org/wiki/Multiton_pattern"
tags: ["pattern"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Multiton

A multiton is a singleton which holds several instances of itself. Each instance is identified with a distinct name, and may be reached independently.

```php
<?php

class Database {
    private static $instances = [];

    private function __construct() { }

    public static function getInstance(string $name) {
 
        // Check if an instance exists with this key already
        if(!isset(self::$instances[$key])) {
            self::$instances[$name] = match($name) {
                'write' => new Connection(self::WRITE_CREDENTIALS),
                'read' => new Connection(self::READ_CREDENTIALS),
                'blackhole' => new NullObject(),
                default => throw new Exception('No such database access')
            };
        }
 
        // Return the correct instance of this class
        return self::$instances[$name];
    }

    private function __clone() { }
}
 
// Create first instance to the master database
$master = Database::getInstance('read');
var_dump($master); // object(Database)#1 (0) { }
 
// Create second instance of this class for a logger database
$logger = Database::getInstance('write');
var_dump($logger); // object(Database)#2 (0) { }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Multiton_pattern](https://en.wikipedia.org/wiki/Multiton_pattern)

## See Also
- [Multiton in PHP](https://www.jakowicz.com/multitons-in-php/)

## Related
- [Singleton](/features/singleton.md)


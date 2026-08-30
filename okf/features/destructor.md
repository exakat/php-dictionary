---
type: "concept"
title: "Destructor"
description: "The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning."
resource: "https://www.php.net/manual/en/language.oop5.decon.php"
tags: ["oop", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Destructor

The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning. It is called ``__destruct``.

Most of the time, the destructor is automatic: removing scalar values may be sufficient. In cases of resources, or other objects, it is recommended to issue the graceful commands to shut them down in turn. 

Destructors are usually called after the end of the script, and has no access to any display, including stdout. As such, calls to echo are ineffective, and it is recommended to store the needed logs in another system.

```php
<?php

class X {
    private $file;

    function __construct($path) {
        $this->file = fopen($path, 'w');
    }
    
    function __destruct() {
        fwrite($this->file, 'End');
        fclose($this->file);
    }
}

$x = new X('/tmp/test.txt');
unset($x);

?>
```

## Documentation
- [https://www.php.net/manual/en/language.oop5.decon.php](https://www.php.net/manual/en/language.oop5.decon.php)

## See Also
- [Introduction to Destructor in PHP](https://www.educba.com/destructor-in-php/)

## Related
- [Constructor](/features/constructor.md)
- [Exit](/features/exit.md)
- [Literal](/features/literal.md)
- [Defer Statement](/features/defer.md)
- [Linear Type](/features/linear-type.md)
- [Object Lifecycle](/features/object-lifecycle.md)
- [Shutdown](/features/shutdown.md)


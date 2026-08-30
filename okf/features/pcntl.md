---
type: "extension"
title: "Process Control (pcntl)"
description: "Process Control is a set of native PHP function, that handles signals coming from the OS."
resource: "https://www.php.net/manual/en/book.pcntl.php"
tags: ["extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Process Control (pcntl)

Process Control is a set of native PHP function, that handles signals coming from the OS. 

``pcntl`` is suited for CLI operations, and not for web serving operations. 

``pcntl`` manage process creation, program execution, signal handling and process termination.

```php
<?php

$pid = pcntl_fork();
if ($pid == -1) {
     die('could not fork');
} else if ($pid) {
     // we are the parent
     pcntl_wait($status); //Protect against Zombie children
} else {
     // we are the child
}

?>
```

## Documentation
- [https://www.php.net/manual/en/book.pcntl.php](https://www.php.net/manual/en/book.pcntl.php)

## See Also
- [Example: Parallel processing in PHP using pcntl_fork()](https://gist.github.com/nicksantamaria/21dce5ff2a6640cdff76ce7bc57d2981)

## Related
- [PHP Handlers](/features/handler.md)
- [Shell](/features/shell.md)
- [System Event](/features/system-event.md)
- [pcntl_signal()](/features/pcntl_signal.md)


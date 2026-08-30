---
type: "PHP Feature"
title: "pcntl_signal()"
description: "``pcntl_signal()`` installs a signal handler for a given OS signal."
resource: "https://www.php.net/manual/en/function.pcntl-signal.php"
tags: ["native function", "signal", "process", "cli"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# pcntl_signal()

``pcntl_signal()`` installs a signal handler for a given OS signal. When the specified signal is received by the PHP process, the installed callable is executed.

Common signals include ``SIGTERM``, the graceful termination, ``SIGINT``, the Ctrl+C interrupt, ``SIGHUP``, the reload configuration, and ``SIGCHLD``, the child process state change. The constant ``SIG_DFL`` restores the default OS handler and ``SIG_IGN`` ignores the signal.

Signal handlers are not called immediately when a signal arrives: the engine checks for pending signals between opcodes. Calling ``pcntl_async_signals(true)`` enables asynchronous signal dispatching so that handlers run as soon as the signal is received, without waiting for the next opcode boundary.

``pcntl_signal()`` is available only in CLI SAPI and requires the ``pcntl`` extension.

```php
<?php

    pcntl_async_signals(true);
    
    pcntl_signal(SIGTERM, function (int $signal): void {
        echo 'Received SIGTERM, shutting down gracefully.' . PHP_EOL;
        // Clean up resources, flush buffers, etc.
        exit(0);
    });
    
    pcntl_signal(SIGINT, function (int $signal): void {
        echo 'Received SIGINT (Ctrl+C).' . PHP_EOL;
        exit(0);
    });
    
    echo 'Running... send SIGTERM or press Ctrl+C' . PHP_EOL;
    while (true) {
        sleep(1);
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/function.pcntl-signal.php](https://www.php.net/manual/en/function.pcntl-signal.php)

## See Also
- [pcntl_async_signals()](https://www.php.net/manual/en/function.pcntl-async-signals.php)

## Related
- [Process Control (pcntl)](/features/pcntl.md)
- [PHP Handlers](/features/handler.md)
- [System Event](/features/system-event.md)
- [Process](/features/process.md)
- [Command Line Interface (CLI)](/features/cli.md)

## Details
- Extension: ext-pcntl


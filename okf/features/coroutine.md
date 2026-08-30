---
type: "concept"
title: "Coroutine"
description: "Coroutines are methods whose execution may be suspended and resumed."
resource: "https://en.wikipedia.org/wiki/Coroutine"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Coroutine

Coroutines are methods whose execution may be suspended and resumed. 

PHP generators are a sort of coroutines.

Swoole, Openswoole and fibers extensions offer coroutines.

```php
<?php

    // Example from OpenSwoole (https://openswoole.com/docs/modules/swoole-coroutine)
    Co\run(function()
    {
        go(function()
        {
            Co::sleep(1);
            echo "Done 1\n";
        });
    
        go(function()
        {
            Co::sleep(1);
            echo "Done 2\n";
        });
    });

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Coroutine](https://en.wikipedia.org/wiki/Coroutine)

## See Also
- [Coroutine in PHP](https://openswoole.com/coroutine)

## Related
- [Generator](/features/generator.md)
- [Blocking Wait](/features/blocking-wait.md)
- [Stealth Generator](/features/stealth-generator.md)
- [Actor Model](/features/actor-model.md)
- [Channel](/features/channel.md)
- [Continuation](/features/continuation.md)
- [Green Thread](/features/green-thread.md)
- [AMP (Asynchronous Markup Protocol)](/features/amp.md)
- [OpenSwoole](/features/openswoole.md)
- [ReactPHP](/features/reactphp.md)
- [Swoole](/features/swoole.md)

## Details
- Packagist: [swow/swow](https://packagist.org/packages/swow/swow)
- Packagist: [swlib/saber](https://packagist.org/packages/swlib/saber)
- Packagist: [amphp/amp](https://packagist.org/packages/amphp/amp)
- Extension: ext-swoole
- Extension: ext-openswoole
- Extension: ext-fibers


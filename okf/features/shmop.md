---
type: "extension"
title: "Shared Memory Operations (SHMOP)"
description: "``shmop`` is a PHP extension that gives direct, low-level access to Unix shared memory segments."
resource: "https://www.php.net/manual/en/book.shmop.php"
tags: ["extension", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Shared Memory Operations (SHMOP)

``shmop`` is a PHP extension that gives direct, low-level access to Unix shared memory segments. It exposes a small set of functions, ``shmop_open()``, ``shmop_read()``, ``shmop_write()``, ``shmop_size()``, and ``shmop_delete()``, to allocate a block of shared memory, read from it, write to it, and release it.

Because the memory segment is identified by a system id and lives outside the memory of any single PHP process, it can be opened and shared by multiple, otherwise unrelated processes: several PHP-FPM workers, or a mix of PHP and non-PHP processes, can all attach to the same segment and see each other's writes immediately, without going through a database, a file, or a network round-trip.

``shmop`` provides no built-in locking or synchronization, so concurrent writers must coordinate themselves, typically using the ``sysvsem`` semaphore functions, to avoid corrupting the segment with interleaved writes.

```php
<?php

    // adapted from the PHP manual: https://www.php.net/manual/en/shmop.examples-basic.php
    $shm_id = shmop_open(0xff3, 'c', 0644, 100);

    $data = 'shared payload';
    shmop_write($shm_id, $data, 0);

    $read = shmop_read($shm_id, 0, strlen($data));
    echo $read . PHP_EOL;

    shmop_delete($shm_id);

?>
```

## Documentation
- [https://www.php.net/manual/en/book.shmop.php](https://www.php.net/manual/en/book.shmop.php)

## See Also
- [shmop basic examples](https://www.php.net/manual/en/shmop.examples-basic.php)

## Related
- [Shared Memory](/features/shared-memory.md)
- [Shared](/features/shared.md)
- [Semaphore](/features/sem.md)
- [Concurrency](/features/concurrency.md)

## Details
- Extension: ext-shmop


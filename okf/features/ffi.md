---
type: "acronym"
title: "Foreign Function Interface (FFI)"
description: "``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``.DLL`` or ``.so``, and access directly their function without writing a PHP extension."
resource: "https://www.php.net/manual/en/book.ffi.php#book.ffi"
tags: ["acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Foreign Function Interface (FFI)

``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``.DLL`` or ``.so``, and access directly their function without writing a PHP extension.

```php
<?php

    // Extracted from the PHP manual
    
    // create FFI object, loading libc and exporting function printf()
    $ffi = FFI::cdef(
        "int printf(const char *format, ...);", // this is a regular C declaration
        "libc.so.6");
    // call C's printf()
    $ffi->printf("Hello %s!\n", world);

?>
```

## Documentation
- [https://www.php.net/manual/en/book.ffi.php#book.ffi](https://www.php.net/manual/en/book.ffi.php#book.ffi)

## See Also
- [Blazingly Fast Markdown Parsing in PHP using FFI and Rust](https://ryangjchandler.co.uk/posts/blazingly-fast-markdown-parsing-in-php-using-ffi-and-rust)
- [PHPun with FFI: Getting Rust-ic](https://platform.sh/blog/php-fun-with-ffi-getting-rust-ic/)
- [BUILD GO CODE AND USE IT IN PHP CODEBASE](https://sanixdk.xyz/blogs/build-go-code-and-use-in-php-codebase)
- [How to Use PHP FFI in Programming](https://spiral.dev/blog/how-to-use-php-ffi-in-programming)

## Related
- [Dynamic Loading](/features/dynamic-loading.md)
- [Extensions](/features/extension.md)
- [Interoperability](/features/interoperability.md)
- [Library](/features/library.md)
- [Native](/features/native.md)
- [Performance](/features/performance.md)
- [Library Loading](/features/library-loading.md)

## Details
- Extension: ext-ffi


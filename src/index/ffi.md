# Foreign Function Interface (FFI)
``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``.DLL`` or ``.so``, and access directly their function without writing a PHP extension.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ffi.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ffi.html","name":"Foreign Function Interface (FFI)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Foreign Function Interface (FFI).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.ffi.php#book.ffi)**
## See Also

+ [Blazingly Fast Markdown Parsing in PHP using FFI and Rust](https://ryangjchandler.co.uk/posts/blazingly-fast-markdown-parsing-in-php-using-ffi-and-rust)
+ [PHPun with FFI: Getting Rust-ic](https://platform.sh/blog/php-fun-with-ffi-getting-rust-ic/)
+ [BUILD GO CODE AND USE IT IN PHP CODEBASE](https://sanixdk.xyz/blogs/build-go-code-and-use-in-php-codebase)
+ [How to Use PHP FFI in Programming](https://spiral.dev/blog/how-to-use-php-ffi-in-programming)

## Related

+ [Dynamic Loading](dynamic-loading.ini.html)
+ [Extensions](extension.ini.html)
+ [Interoperability](interoperability.ini.html)
+ [Library](library.ini.html)
+ [Native](native.ini.html)
+ [Performance](performance.ini.html)
+ [Library Loading](library-loading.ini.html)

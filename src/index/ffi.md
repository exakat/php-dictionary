# Foreign Function Interface (FFI)
``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``.DLL`` or ``.so``, and access directly their function without writing a PHP extension.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ffi.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ffi.html","name":"Foreign Function Interface (FFI)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Foreign Function Interface, also known as FFI allows loading external libraries, such as ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Foreign Function Interface (FFI).html"]}],"keywords":["acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-loading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interoperability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/library.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/performance.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/library-loading.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.ffi.php#book.ffi"},{"@type":"CreativeWork","name":"Blazingly Fast Markdown Parsing in PHP using FFI and Rust","url":"https:\/\/ryangjchandler.co.uk\/posts\/blazingly-fast-markdown-parsing-in-php-using-ffi-and-rust"},{"@type":"CreativeWork","name":"PHPun with FFI: Getting Rust-ic","url":"https:\/\/platform.sh\/blog\/php-fun-with-ffi-getting-rust-ic\/"},{"@type":"CreativeWork","name":"BUILD GO CODE AND USE IT IN PHP CODEBASE","url":"https:\/\/sanixdk.xyz\/blogs\/build-go-code-and-use-in-php-codebase"},{"@type":"CreativeWork","name":"How to Use PHP FFI in Programming","url":"https:\/\/spiral.dev\/blog\/how-to-use-php-ffi-in-programming"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ffi"}]}]}</script>
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

+ [Dynamic Loading](dynamic-loading.html)
+ [Extensions](extension.html)
+ [Interoperability](interoperability.html)
+ [Library](library.html)
+ [Native](native.html)
+ [Performance](performance.html)
+ [Library Loading](library-loading.html)

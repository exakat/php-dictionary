.. _ffi:

Foreign Function Interface
--------------------------

``Foreign Function Interface``, also known as ``FFI`` allows loading external libraries, such as ``.DLL`` or ``.so``, and access directly their function without writing a PHP extension.

.. code-block:: php
   
   <?php
   // Extracted from the PHP manual
   
   // create FFI object, loading libc and exporting function printf()
   $ffi = FFI::cdef(
       "int printf(const char *format, ...);", // this is a regular C declaration
       "libc.so.6");
   // call C's printf()
   $ffi->printf("Hello %s!\n", "world");
   ?>


`Documentation <https://www.php.net/manual/en/book.ffi.php#book.ffi>`__

See also `Blazingly Fast Markdown Parsing in PHP using FFI and Rust <https://ryangjchandler.co.uk/posts/blazingly-fast-markdown-parsing-in-php-using-ffi-and-rust>`_, `PHPun with FFI: Getting Rust-ic <https://platform.sh/blog/php-fun-with-ffi-getting-rust-ic/>`_

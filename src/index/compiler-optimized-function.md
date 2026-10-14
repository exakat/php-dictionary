# Compiler Optimized Function
A compiler optimized function is one of a fixed list of native functions that the Zend compiler recognizes by name at compile time, and turns into a dedicated, specialized opcode sequence instead of a generic function call. Because these functions are called extremely often (``count()``, ``is_array()``, ``in_array()``, ``strlen()``...), skipping the usual ``INIT_FCALL`` / ``SEND_VAL`` / ``DO_FCALL`` machinery removes call overhead and lets the VM execute a shorter, more direct set of instructions.

This optimization only applies when every condition is met:

+ The call is a direct, literal call: ``count($a)``, not a variable function call like ``$f($a)`` or ``'count'($a)``.
+ The function has not been redeclared or disabled (``disable_functions``): if the resolved function is not the original internal one, the compiler falls back to a normal call, so a polyfill or override always takes effect.
+ Arguments are not spread (``...``) or named: ``count(...$args)`` and ``count(value: $a)`` both bypass the optimization.
+ The ``ZEND_COMPILE_NO_BUILTINS`` compiler flag is not set (this flag is used in a few contexts, such as some ``eval()`` internals, to force plain calls).

As of PHP 8.5, the functions eligible for this treatment are: ``strlen``, ``is_null``, ``is_bool``, ``is_long``/``is_int``/``is_integer``, ``is_float``/``is_double``, ``is_string``, ``is_array``, ``is_object``, ``is_resource``, ``is_scalar``, ``boolval``, ``intval``, ``floatval``/``doubleval``, ``strval``, ``defined``, ``chr``, ``ord``, ``call_user_func_array``, ``call_user_func``, ``in_array``, ``count``/``sizeof``, ``get_class``, ``get_called_class``, ``gettype``, ``func_num_args``, ``func_get_args``, ``array_slice``, and ``array_key_exists``. ``assert()`` also receives dedicated compile-time handling, though through a separate code path, so that it can be stripped entirely when assertions are disabled.

This list is an implementation detail of the Zend Engine: it changes between PHP versions as functions are added or removed from it, and it is not part of the language specification. It has no direct impact on the code semantics, only on the emitted opcodes and, therefore, on performance.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compiler-optimized-function.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compiler-optimized-function.html","name":"Compiler Optimized Function","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 18 Sep 2026 15:28:26 +0000","dateModified":"Fri, 18 Sep 2026 15:28:26 +0000","description":"A compiler optimized function is one of a fixed list of native functions that the Zend compiler recognizes by name at compile time, and turns into a dedicated, specialized opcode sequence instead of a generic function call","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compiler-optimized-function.html"]}],"alternateName":["special-compiled-function","vm-builtin-function","inlined-internal-function"],"keywords":["concept","optimisation","internals"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compiler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time-evaluation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/opcache.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/disable-functions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/in_array.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/count.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/func_get_args.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_slice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array_key_exists.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/defined.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/github.com\/php\/php-src\/blob\/master\/Zend\/zend_compile.c"},{"@type":"CreativeWork","name":"zend_try_compile_special_func() in zend_compile.c","url":"https:\/\/github.com\/php\/php-src\/blob\/944b6b6bbd6f05ad905f5f4ad07445792bee4027\/Zend\/zend_compile.c#L4291-L4353"},{"@type":"CreativeWork","name":"PHP OPcache","url":"https:\/\/www.php.net\/manual\/en\/book.opcache.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"compiler-optimized-function"}]}]}</script>
```php
<?php

    $array = [1, 2, 3];

    // Compiled to a dedicated COUNT opcode: fast path.
    echo count($array);

    // Still a plain function call: the compiler cannot special-case
    // an indirect / dynamic call.
    $fn = 'count';
    echo $fn($array);

    // Also a plain function call: named arguments disable the shortcut.
    echo count(value: $array);

    // If count() is redefined (e.g. via a polyfill after disable_functions),
    // every call to it, direct or not, uses the redefinition instead of
    // the optimized opcode.

?>
```

**[Documentation](https://github.com/php/php-src/blob/master/Zend/zend_compile.c)**
## See Also

+ [zend_try_compile_special_func() in zend_compile.c](https://github.com/php/php-src/blob/944b6b6bbd6f05ad905f5f4ad07445792bee4027/Zend/zend_compile.c#L4291-L4353)
+ [PHP OPcache](https://www.php.net/manual/en/book.opcache.php)

## Related

+ [Compiler](compiler.html)
+ [Compile Time](compile-time.html)
+ [Compile-time Evaluation](compile-time-evaluation.html)
+ [Opcache](opcache.html)
+ [Just In Time (JIT)](jit.html)
+ [Disable Functions](disable-functions.html)
+ [in\_array()](in_array.html)
+ [count()](count.html)
+ [get\_class()](get_class.html)
+ [gettype()](gettype.html)
+ [func\_get\_args()](func_get_args.html)
+ [array\_slice()](array_slice.html)
+ [array\_key\_exists()](array_key_exists.html)
+ [defined()](defined.html)

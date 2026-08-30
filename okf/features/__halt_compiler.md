---
type: "PHP Feature"
title: "__halt_compiler()"
description: "``__halt_compiler()`` halts the execution of the compiler."
resource: "https://www.php.net/manual/en/function.halt-compiler.php"
tags: ["feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# __halt_compiler()

``__halt_compiler()`` halts the execution of the compiler. This is useful to embed data alongside code, like the installation files. 

Byte position of the data start can be determined by the ``__COMPILER_HALT_OFFSET__`` constant which is defined only if there is a ``__halt_compiler()`` presented in the file.

```php
<?php

    // adapted from the manual
    
    // open this file
    $fp = fopen(__FILE__, 'r');
    
    // seek file pointer to data
    fseek($fp, __COMPILER_HALT_OFFSET__);
    
    // and output it
    var_dump(stream_get_contents($fp));
    
    // the end of the script execution
__halt_compiler(); This part of the file is read by the script.
```

## Documentation
- [https://www.php.net/manual/en/function.halt-compiler.php](https://www.php.net/manual/en/function.halt-compiler.php)

## See Also
- [Use "__halt_compiler" to ... well, halt the PHP compiler](https://coderwall.com/p/ts2kva/use-__halt_compiler-to-well-halt-the-php-compiler)

## Related
- [Compile](/features/compile.md)
- [Zend Engine](/features/zend-engine.md)


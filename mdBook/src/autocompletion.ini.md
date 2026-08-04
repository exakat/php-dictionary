# Autocompletion
Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing. It speeds up development, reduces typos, and surfaces available APIs without requiring constant documentation lookups.

PHP autocompletion relies on static analysis: type declarations in the source, PHPDoc annotations, and type inference where a type is not explicitly specified by may be guessed with a high level of confidence. Autocompletion relies on a LSP server: ``Language Server Protocol``.

Autocompletion also applies to IDE plugins, framework-specific stubs, and tools like stub files to enable completion for external components.
```php
<?php

    // Full type information enables accurate autocompletion
    function getUser(int $id): User {
        return new User($id);
    }

    $user = getUser(1);
    $user->  // IDE suggests: getName(), getEmail(), getId() …

?>
```

## See Also

+ [Intelephense – PHP language server](https://intelephense.com/)
+ [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
+ [PHP Language Server Protocol](https://microsoft.github.io/language-server-protocol/)

Related : [Type System](Type System), [Type System](Type System), [Type Inference](Type Inference), [PHPdoc](PHPdoc), [Static Code Analysis (SCA)](Static Code Analysis (SCA)), [LSP](LSP), [LSP](LSP), [PHP AI Editor](PHP AI Editor), [PHP Editor](PHP Editor), [Integrated Environment of Development (IDE)](Integrated Environment of Development (IDE))

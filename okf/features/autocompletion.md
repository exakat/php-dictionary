---
type: "concept"
title: "Autocompletion"
description: "Autocompletion, or autocomplete, also called code completion, is an IDE or editor feature that suggests or completes code while the developer is typing."
resource: "https://en.wikipedia.org/wiki/Autocomplete"
tags: ["concept", "best practice"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Autocompletion

Autocompletion, or autocomplete, also called code completion, is an IDE or editor feature that suggests or completes code while the developer is typing. It speeds up development, reduces typos, and surfaces available APIs without requiring constant documentation lookups.

PHP autocompletion relies on static analysis: type declarations in the source, PHPDoc annotations, and type inference, where a type is not explicitly specified, may be guessed with a high level of confidence. Autocompletion relies on an LSP server: ``Language Server Protocol``.

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

## Documentation
- [https://en.wikipedia.org/wiki/Autocomplete](https://en.wikipedia.org/wiki/Autocomplete)

## See Also
- [Intelephense – PHP language server](https://intelephense.com/)
- [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
- [PHP Language Server Protocol](https://microsoft.github.io/language-server-protocol/)

## Related
- [Type System](/features/type.md)
- [Type Inference](/features/type-inference.md)
- [PHPdoc](/features/phpdoc.md)
- [Static Code Analysis (SCA)](/features/sca.md)
- [LSP](/features/lsp.md)
- [Language Server Protocol (LSP)](/features/language-service-protocol.md)
- [PHP AI Editor](/features/php-ai-editor.md)
- [PHP Editor](/features/php-editor.md)
- [Integrated Environment of Development (IDE)](/features/ide.md)

## Details
- Packagist: [barryvdh/laravel-ide-helper](https://packagist.org/packages/barryvdh/laravel-ide-helper)


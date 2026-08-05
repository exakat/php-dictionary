# Autocompletion
Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing. It speeds up development, reduces typos, and surfaces available APIs without requiring constant documentation lookups.

PHP autocompletion relies on static analysis: type declarations in the source, PHPDoc annotations, and type inference where a type is not explicitly specified by may be guessed with a high level of confidence. Autocompletion relies on a LSP server: ``Language Server Protocol``.

Autocompletion also applies to IDE plugins, framework-specific stubs, and tools like stub files to enable completion for external components.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autocompletion.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/autocompletion.ini.html","name":"Autocompletion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:50 +0000","dateModified":"Fri, 19 Jun 2026 21:24:50 +0000","description":"Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Autocompletion.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Autocomplete)**
## See Also

+ [Intelephense – PHP language server](https://intelephense.com/)
+ [Laravel IDE Helper](https://github.com/barryvdh/laravel-ide-helper)
+ [PHP Language Server Protocol](https://microsoft.github.io/language-server-protocol/)

## Related

+ [Type System](type.ini.html)
+ [Type System](type-hint.ini.html)
+ [Type Inference](type-inference.ini.html)
+ [PHPdoc](phpdoc.ini.html)
+ [Static Code Analysis (SCA)](sca.ini.html)
+ [LSP](lsp.ini.html)
+ [LSP](language-service-protocol.ini.html)
+ [PHP AI Editor](php-ai-editor.ini.html)
+ [PHP Editor](php-editor.ini.html)
+ [Integrated Environment of Development (IDE)](ide.ini.html)

## Related packages

+ [barryvdh/laravel-ide-helper](https://packagist.org/packages/barryvdh/laravel-ide-helper)

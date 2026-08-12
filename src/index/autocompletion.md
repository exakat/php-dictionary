# Autocompletion
Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing. It speeds up development, reduces typos, and surfaces available APIs without requiring constant documentation lookups.

PHP autocompletion relies on static analysis: type declarations in the source, PHPDoc annotations, and type inference where a type is not explicitly specified by may be guessed with a high level of confidence. Autocompletion relies on a LSP server: ``Language Server Protocol``.

Autocompletion also applies to IDE plugins, framework-specific stubs, and tools like stub files to enable completion for external components.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autocompletion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autocompletion.html","name":"Autocompletion","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:50 +0000","dateModified":"Fri, 19 Jun 2026 21:24:50 +0000","description":"Autocompletion is an IDE or editor feature that suggests or completes code while the developer is typing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Autocompletion.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"autocompletion"}]}]}</script>
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

+ [Type System](type.html)
+ [Type System](type-hint.html)
+ [Type Inference](type-inference.html)
+ [PHPdoc](phpdoc.html)
+ [Static Code Analysis (SCA)](sca.html)
+ [LSP](lsp.html)
+ [Language Server Protocol (LSP)](language-service-protocol.html)
+ [PHP AI Editor](php-ai-editor.html)
+ [PHP Editor](php-editor.html)
+ [Integrated Environment of Development (IDE)](ide.html)

## Related packages

+ [barryvdh/laravel-ide-helper](https://packagist.org/packages/barryvdh/laravel-ide-helper)

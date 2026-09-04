# Autocompletion
Autocompletion, or autocomplete, also called code completion, is an IDE or editor feature that suggests or completes code while the developer is typing. It speeds up development, reduces typos, and surfaces available APIs without requiring constant documentation lookups.

PHP autocompletion relies on static analysis: type declarations in the source, PHPDoc annotations, and type inference, where a type is not explicitly specified, may be guessed with a high level of confidence. Autocompletion relies on an LSP server: ``Language Server Protocol``.

Autocompletion also applies to IDE plugins, framework-specific stubs, and tools like stub files to enable completion for external components.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autocompletion.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autocompletion.html","name":"Autocompletion","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 06:21:34 +0000","dateModified":"Tue, 01 Sep 2026 06:21:34 +0000","description":"Autocompletion, or autocomplete, also called code completion, is an IDE or editor feature that suggests or completes code while the developer is typing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/autocompletion.html"]}],"alternateName":["autocomplete","code-completion"],"keywords":["concept","best practice"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-inference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/phpdoc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sca.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lsp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/language-service-protocol.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-ai-editor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-editor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ide.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Autocomplete"},{"@type":"CreativeWork","name":"Intelephense \u2013 PHP language server","url":"https:\/\/intelephense.com\/"},{"@type":"CreativeWork","name":"Laravel IDE Helper","url":"https:\/\/github.com\/barryvdh\/laravel-ide-helper"},{"@type":"CreativeWork","name":"PHP Language Server Protocol","url":"https:\/\/microsoft.github.io\/language-server-protocol\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"autocompletion"}]}]}</script>
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

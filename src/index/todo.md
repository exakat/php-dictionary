# TODO
``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements. It is not a PHP language feature, but a widely adopted convention recognized by IDEs, static analyzers, and code-review tools.

Common variants include ``FIXME``, for broken code that must be repaired, ``HACK``, for a workaround that should be replaced, and ``XXX``, a warning that the code is dangerous or unclear.

Static analyzers can locate TODO comments in a codebase and report them as technical debt. Leaving TODO comments in production code is generally discouraged unless they are tied to a tracked issue.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/todo.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/todo.html","name":"TODO","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 05:40:05 +0000","dateModified":"Thu, 13 Aug 2026 05:40:05 +0000","description":"TODO is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/TODO.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"todo"}]}]}</script>
```php
<?php

    // TODO: replace this with a proper caching layer
    function getUser(int $id): array
    {
        // FIXME: this query is missing an index on user_id
        return $pdo->query("SELECT * FROM users WHERE id = $id")->fetch();
    }

    // HACK: upstream library does not handle null, remove after upgrading to v3
    $value = $result ?? '';

    // XXX: this block mutates global state; refactor before next release
    global $config;
    $config['debug'] = true;

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Comment_(computer_programming)#Tags)**
## Related

+ [Comments](comment.html)
+ [Reserved For Future Use (RFU)](rfu.html)

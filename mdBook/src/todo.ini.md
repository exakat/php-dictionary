# TODO
``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements. It is not a PHP language feature, but a widely adopted convention recognized by IDEs, static analyzers, and code-review tools.

Common variants include ``FIXME``, for broken code that must be repaired, ``HACK``, for a workaround that should be replaced, and ``XXX``, a warning that the code is dangerous or unclear.

Static analyzers can locate TODO comments in a codebase and report them as technical debt. Leaving TODO comments in production code is generally discouraged unless they are tied to a tracked issue.
```php
<?php

    // TODO: replace this with a proper caching layer
    function getUser(int $id): array
    {
        // FIXME: this query is missing an index on user_id
        return $pdo->query("SELECT * FROM users WHERE id = $id")->fetch();
    }

    // HACK: upstream library does not handle null — remove after upgrading to v3
    $value = $result ?? '';

    // XXX: this block mutates global state; refactor before next release
    global $config;
    $config['debug'] = true;

?>
```

Related : [Comments](Comments), [Reserved For Future Use (RFU)](Reserved For Future Use (RFU))

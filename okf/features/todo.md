---
type: "concept"
title: "TODO"
description: "``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements."
resource: "https://en.wikipedia.org/wiki/Comment_(computer_programming)#Tags"
tags: ["concept", "sdlc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# TODO

``TODO`` is a conventional comment marker used in source code to flag unfinished work, known limitations, or planned improvements. It is not a PHP language feature, but a widely adopted convention recognized by IDEs, static analyzers, and code-review tools.

Common variants include ``FIXME``, for broken code that must be repaired, ``HACK``, for a workaround that should be replaced, and ``XXX``, a warning that the code is dangerous or unclear.

Static analyzers can locate ``TODO`` comments in a codebase and report them as technical debt. Leaving ``TODO`` comments in production code is generally discouraged unless they are tied to a tracked issue.

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

## Documentation
- [https://en.wikipedia.org/wiki/Comment_(computer_programming)#Tags](https://en.wikipedia.org/wiki/Comment_(computer_programming)#Tags)

## See Also
- [Taming TODO and FIXME comments](https://medium.com/@tangiblej/taming-todo-and-fixme-comments-7a4b6041e905)
- [TODO and FIXME comments must have ownership](https://docs.datadoghq.com/security/code_security/static_analysis/static_analysis_rules/python-best-practices/comment-fixme-todo-ownership/)

## Related
- [Comments](/features/comment.md)
- [Reserved For Future Use (RFU)](/features/rfu.md)


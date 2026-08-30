---
type: "concept"
title: "Contribution"
description: "A contribution, or open-source contribution, is a change submitted to a software project, typically in the form of a pull request or patch."
resource: "https://docs.github.com/en/get-started/exploring-projects-on-github/contributing-to-a-project"
tags: ["concept", "community", "rfc"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Contribution

A contribution, or open-source contribution, is a change submitted to a software project, typically in the form of a pull request or patch. Contributing to open-source projects is a core part of the PHP ecosystem: the language itself, its extensions, and the majority of popular frameworks and libraries are developed collaboratively.

Contributions can take many forms:

+ Bug reports and reproducible test cases
+ Code fixes, new features, and refactoring
+ Documentation improvements
+ Test coverage additions
+ Translations and localization

Many Open Source projects provide a ``CONTRIBUTING.md`` file that describes coding standards, testing requirements, and the review process.

PHP's own development process goes through RFCs voted on by internals contributors.

```php
<?php

// Example: typical open-source contribution workflow (shell commands)
// git clone https://github.com/vendor/project
// cd project
// git checkout -b fix/issue-123
// # Make changes
// git add .
// git commit -m 'Fix: description of the change'
// git push origin fix/issue-123
// # Open a pull request on GitHub

?>
```

## Documentation
- [https://docs.github.com/en/get-started/exploring-projects-on-github/contributing-to-a-project](https://docs.github.com/en/get-started/exploring-projects-on-github/contributing-to-a-project)

## See Also
- [Contributing to open source - GitHub Docs](https://docs.github.com/en/get-started/exploring-projects-on-github/contributing-to-open-source)
- [PHP Internals](https://www.php.net/get-involved.php)

## Related
- [Open Source](/features/open-source.md)
- [git](/features/git.md)
- [Pull Request (PR)](/features/pr.md)
- [PHP RFC](/features/php-rfc.md)
- [Community](/features/community.md)


---
type: "PHP Feature"
title: "Git Hook"
description: "Git hooks are scripts that Git executes automatically at specific points in the version-control workflow."
resource: "https://git-scm.com/book/en/v2/Customizing-Git-Git-Hooks"
tags: ["vcs", "devops", "quality"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Git Hook

Git hooks are scripts that Git executes automatically at specific points in the version-control workflow. They live in the ``.git/hooks/`` directory of a repository and are triggered by operations such as committing, merging, pushing, or checking out.

Common hooks used in projects:

+ ``pre-commit`` runs before a commit is recorded. It is the standard place to invoke code-quality tools: static analysis or unit test suites to block commits that would introduce errors or style violations
+ ``commit-msg`` validates the commit message format, for example enforcing a conventional-commits pattern
+ ``pre-push`` runs before ``git push`` sends data to a remote. It is a last line of defence for running the full test suite
+ ``post-checkout`` and ``post-merge`` can automate ``composer install`` after switching branches or pulling changes

Because ``.git/hooks/`` is not tracked by version control, teams share hook scripts through tools such as ``captainhook/captainhook``, ``brainmaestro/composer-git-hooks``, or ``husky``, for JavaScript-adjacent stacks. These tools install hooks from a committed configuration file, ensuring every contributor runs the same checks.

```php
#!/bin/sh
# .git/hooks/pre-commit
# Block commit if PHP syntax errors are found
git diff --cached --name-only --diff-filter=ACM | grep '\.php$' | while read file; do
    php -l "$file" || exit 1
done
```

## Documentation
- [https://git-scm.com/book/en/v2/Customizing-Git-Git-Hooks](https://git-scm.com/book/en/v2/Customizing-Git-Git-Hooks)

## See Also
- [CaptainHook](https://github.com/captainhookphp/captainhook)
- [composer-git-hooks](https://github.com/BrainMaestro/composer-git-hooks)

## Related
- [Hook](/features/hook.md)
- [git](/features/git.md)
- [Version Control System (VCS)](/features/vcs.md)
- [Continuous Integration (CI)](/features/ci.md)
- [Commit](/features/commit.md)
- [Linting](/features/linting.md)
- [Code Review](/features/code-review.md)
- [Composer](/features/composer.md)

## Details
- Packagist: [captainhook/captainhook](https://packagist.org/packages/captainhook/captainhook)
- Packagist: [brainmaestro/composer-git-hooks](https://packagist.org/packages/brainmaestro/composer-git-hooks)


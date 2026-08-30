---
type: "PHP Feature"
title: "Branch"
description: "A branch is one of the two alternative in a if then expression."
resource: "https://www.php.net/manual/en/control-structures.if.php"
tags: ["syntax"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Branch

A branch is one of the two alternative in a if then expression. There is the ``then`` branch, and the ``else`` branch. There are usually two meanings associated with PHP code:

+ Control-flow branch: the path taken by execution when a condition is evaluated, as in ``if``/``else``, ``match()`` arms, or ``switch`` cases
+ VCS branch: a parallel, independent line of development in a version control system such as git, created to work on a feature or fix without disturbing the main line, and later reintegrated through a pull request or a merge commit.

```php
<?php

    // a match with 2 arm, including the default
    if ($a) {
        $branch = 'then';
    } else {
        $branch = 'else';
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/control-structures.if.php](https://www.php.net/manual/en/control-structures.if.php)

## See Also
- [How to Create a Branch in Git? | Atlassian Git Tutorial](https://www.atlassian.com/git/tutorials/using-branches)
- [Git Branch: Creating, Managing, and Merging Branches](https://www.datacamp.com/tutorial/git-branch)

## Related
- [Arm](/features/arm.md)
- [If Then Else](/features/if-then.md)
- [Pull Request (PR)](/features/pr.md)
- [VCS Commit](/features/vcs-commit.md)
- [Worktree](/features/worktree.md)


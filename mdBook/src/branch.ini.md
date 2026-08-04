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

Related : [Arm](Arm), [If Then Else](If Then Else), [Pull Request (PR)](Pull Request (PR)), [VCS Commit](VCS Commit), [Worktree](Worktree)

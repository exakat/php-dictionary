# Habit
A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time.

Habits can be beneficial: such as always validating input, writing tests first, or naming variables clearly; they may be harmful, such as suppressing errors with ``@``, using magic numbers, or leaving dead code in place.

Good habits are the foundation of consistent code quality. They turn best practices into second nature. Bad habits are often the source of recurring issues in a codebase, since they are applied without reflection.

Static analysis tools are particularly effective at reporting bad habits: patterns that appear many times across a codebase, reflecting a systematic behaviour rather than a one-off mistake.
```php
<?php

    // A bad habit: silencing errors instead of handling them
    $result = @file_get_contents('data.json');

    // A good habit: checking return values explicitly
    $result = file_get_contents('data.json');
    if ($result === false) {
        throw new RuntimeException('Could not read data.json');
    }

?>
```

## See Also

+ [The Power of Habit in Software Engineering](https://martinfowler.com/articles/writingPatterns.html)

Related : [Best Practices](Best Practices), [Coding Conventions](Coding Conventions), [@, No Scream Operator](@, No Scream Operator), [Dead Code](Dead Code), [Magic Numbers](Magic Numbers), [Readability](Readability), [Canonical](Canonical)

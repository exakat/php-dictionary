# Habit
A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time.

Habits can be beneficial: such as always validating input, writing tests first, or naming variables clearly; they may be harmful, such as suppressing errors with ``@``, using magic numbers, or leaving dead code in place.

Good habits are the foundation of consistent code quality. They turn best practices into second nature. Bad habits are often the source of recurring issues in a codebase, since they are applied without reflection.

Static analysis tools are particularly effective at reporting bad habits: patterns that appear many times across a codebase, reflecting a systematic behaviour rather than a one-off mistake.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/habit.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/habit.html","name":"Habit","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A habit, in the context of software development, is a coding practice that a developer applies automatically and repeatedly, without necessarily making a deliberate decision each time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Habit.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"habit"}]}]}</script>
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

**[Documentation](https://en.wikipedia.org/wiki/Habit)**
## See Also

+ [The Power of Habit in Software Engineering](https://martinfowler.com/articles/writingPatterns.html)

## Related

+ [Best Practices](best-practice.html)
+ [Coding Conventions](coding-convention.html)
+ [@, No Scream Operator](noscream.html)
+ [Dead Code](dead-code.html)
+ [Magic Numbers](magic-number.html)
+ [Readability](readability.html)
+ [Canonical](canonical.html)

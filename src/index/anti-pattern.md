# Anti-Pattern
An anti-pattern is a common but counterproductive solution to a recurring problem. Unlike a mistake made once, an anti-pattern is a response that appears reasonable or even familiar, is applied repeatedly, and systematically produces negative consequences: increased complexity, fragility, poor performance, or security vulnerabilities.

The term was coined in 1995 by ``Andrew Koenig`` and popularised by the 1998 book Anti-Patterns by ``Brown``, ``Malveau``, ``McCormick``, and ``Mowbray``. It draws an explicit parallel with design patterns: where a design pattern documents a proven good solution, an anti-pattern documents a proven bad one, together with the root cause, the symptoms that reveal it, and the refactored solution that replaces it.

Anti-patterns appear at every level of software development:

+ Architectural anti-patterns: big ball of mud, god object, spaghetti code
+ Design anti-patterns: singleton overuse, service Locator, magic container
+ Coding anti-patterns: copy-paste programming, premature optimisation, magic numbers
+ PHP-specific anti-patterns: suppressing errors with ``@``, using ``eval()`` for configuration, ``register_globals``-era dynamic variable injection

Recognising anti-patterns is a key skill in code review and static analysis. Exakat detects a wide range of PHP anti-patterns through dedicated rules.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anti-pattern.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anti-pattern.html","name":"Anti-Pattern","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 08:35:50 +0000","dateModified":"Tue, 11 Aug 2026 08:35:50 +0000","description":"An anti-pattern is a common but counterproductive solution to a recurring problem","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anti-pattern.html"]}],"alternateName":["antipattern"],"keywords":["concept","quality"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fat-controller.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/analysis.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Anti-pattern"},{"@type":"CreativeWork","name":"Recognizing Common PHP Anti-Patterns","url":"https:\/\/softwarepatternslexicon.com\/php\/anti-patterns-in-php\/recognizing-common-php-anti-patterns\/"},{"@type":"CreativeWork","name":"AntiPatterns book (Brown et al., 1998)","url":"https:\/\/en.wikipedia.org\/wiki\/AntiPatterns"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"anti-pattern"}]}]}</script>
```php
<?php

    // Anti-pattern: God Object: one class that knows and does everything
    class Application {
        public function connectDatabase() { /* ... */ }
        public function renderHtml() { /* ... */ }
        public function sendEmail() { /* ... */ }
        public function validateInput() { /* ... */ }
        public function logError() { /* ... */ }
        // ... dozens more methods
    }
    
    // Anti-pattern: error suppression hiding real problems
    $result = @file_get_contents('data.json'); // silences warnings instead of handling them
    
    // Anti-pattern: magic numbers with no explanation
    if ($status === 3) { // What does 3 mean?
        redirect();
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Anti-pattern)**
## See Also

+ [Recognizing Common PHP Anti-Patterns](https://softwarepatternslexicon.com/php/anti-patterns-in-php/recognizing-common-php-anti-patterns/)
+ [AntiPatterns book (Brown et al., 1998)](https://en.wikipedia.org/wiki/AntiPatterns)

## Related

+ [Pattern](pattern.html)
+ [Fat Controller](fat-controller.html)
+ [Static Application Security Testing (SAST)](sast.html)
+ [Analysis](analysis.html)

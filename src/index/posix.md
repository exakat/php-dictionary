# POSIX
``posix`` is a PHP extension that gives access to functions defined in the IEEE 1003.1, POSIX.1, standard that are not reachable through other PHP functions. It exposes operating system features such as process identifiers, user and group information, terminal detection, signal sending, and system identification.

The extension is available on Unix-like systems only: ``Linux``, ``macOS``, ``BSD``. It is enabled by default in most PHP builds.

``posix`` is commonly used alongside ``pcntl`` in command-line scripts, for example to check the current user, to detect whether a stream is a terminal with ``posix_isatty()``, or to send signals with ``posix_kill()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/posix.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/posix.html","name":"POSIX","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 14 Oct 2026 18:09:01 +0000","dateModified":"Wed, 14 Oct 2026 18:09:01 +0000","description":"posix is a PHP extension that gives access to functions defined in the IEEE 1003","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/posix.html"]}],"keywords":["extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.posix.php"},{"@type":"CreativeWork","name":"IEEE Std 1003.1-2008 (POSIX.1)","url":"https:\/\/standards.ieee.org\/ieee\/1003.1\/7700\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"posix"}]}]}</script>
```php
<?php

  $uid  = posix_getuid();
  $user = posix_getpwuid($uid);
  echo 'Running as ', $user['name'], ' (uid ', $uid, ')', PHP_EOL;

  if (posix_isatty(STDOUT)) {
      echo 'Output is a terminal', PHP_EOL;
  }

?>
```

**[Documentation](https://www.php.net/manual/en/book.posix.php)**
## See Also

+ [IEEE Std 1003.1-2008 (POSIX.1)](https://standards.ieee.org/ieee/1003.1/7700/)

## Related

+ [Process Control (pcntl)](pcntl.html)
+ [Process](process.html)
+ [Shell](shell.html)

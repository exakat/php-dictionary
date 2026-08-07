# Makefile
A ``Makefile`` is a configuration file used by the ``make`` build automation tool. It defines targets, their dependencies, and the shell commands to run when a target is built. Targets declared with ``.PHONY`` are always executed regardless of any file with the same name.

In projects, ``Makefile`` files act as task runners that group common developer operations: installing dependencies, running tests, checking code style, running static analysis, or deploying.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/makefile.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/makefile.html","name":"Makefile","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:16:23 +0000","dateModified":"Thu, 09 Jul 2026 08:16:23 +0000","description":"A ``Makefile`` is a configuration file used by the ``make`` build automation tool","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Makefile.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Makefile"}]}]}</script>
```php
# Makefile
.PHONY: install test lint fix deploy

install:
\tcomposer install

test:
\tvendor/bin/phpunit

lint:
\tvendor/bin/phpstan analyse src/
\tvendor/bin/php-cs-fixer check src/

fix:
\tvendor/bin/php-cs-fixer fix src/

deploy: test
\trsync -avz src/ user@server:/var/www/app/
```

**[Documentation](https://en.wikipedia.org/wiki/Make_(software))**
## See Also

+ [GNU make manual](https://www.gnu.org/software/make/manual/make.html)

## Related

+ [Continuous Integration (CI)](ci.html)
+ [Task Runner](task-runner.html)
+ [Deployment](deploy.html)
+ [Composer](composer.html)
+ [Build](build.html)

# Makefile
A ``Makefile`` is a configuration file used by the ``make`` build automation tool. It defines targets, their dependencies, and the shell commands to run when a target is built. Targets declared with ``.PHONY`` are always executed regardless of any file with the same name.

In projects, ``Makefile`` files act as task runners that group common developer operations: installing dependencies, running tests, checking code style, running static analysis, or deploying.
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

## See Also

+ [GNU make manual](https://www.gnu.org/software/make/manual/make.html)

Related : [Continuous Integration (CI)](Continuous Integration (CI)), [Task Runner](Task Runner), [Deployment](Deployment), [Composer](Composer), [Build](Build)

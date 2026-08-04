# Code Generation
Code generation is the automatic production of source code from a higher-level specification, model, schema, or set of rules. Rather than writing repetitive or boilerplate code by hand, a generator reads a description and emits the corresponding PHP source, which is then used directly or compiled into the application.

Code generation takes several forms:

+ Schema-driven generation: an ORM such as Doctrine generates entity classes, migration files, and repository stubs from a database schema or mapping configuration.
+ Attribute-driven generation: attributes on classes, properties, and methods, in versions 8.0+, are read by tools such as Symfony's DI container or Doctrine to emit container configuration, proxy classes, or metadata caches as a build step.
+ Scaffolding: frameworks such as Laravel, with ``artisan make:*``, and Symfony, ``make:entity``, ``make:controller``, generate controllers, models, migrations, and test stubs from a single command.
+ Proxy generation: libraries such as ``ocramius/proxy-manager`` emit subclass proxies at runtime or ahead of time to implement lazy loading, access interception, or decoration without touching the original class.
+ AST rewriting: ``nikic/php-parser`` parses PHP source into an AST, applies transformations via a visitor, and regenerates source, used by Rector for automated refactoring and upgrade migrations.
+ Template-based generation: tools such as ``twig`` or custom scripts emit PHP classes, configuration files, or API clients from templates.

Generated code is typically committed to the repository, so that deployment does not require a build step, or kept out of version control and regenerated as part of CI. The choice depends on whether the generated output is considered an artefact or a first-class source file.

Code generation differs from metaprogramming in that it produces static files before runtime; metaprogramming operates on the live program at runtime.
```php
<?php

    // Doctrine: generate entity proxy classes ahead of time (CLI build step)
    // php vendor/bin/doctrine orm:generate-proxies

    // Symfony: scaffold a new entity with make:entity
    // php bin/console make:entity User

    // nikic/php-parser: generate a getter method and write it back to the file
    use PhpParser\BuilderFactory;
    use PhpParser\PrettyPrinter\Standard;

    $factory = new BuilderFactory();
    $method  = $factory->method('getName')
        ->makePublic()
        ->setReturnType('string')
        ->addStmt(new \PhpParser\Node\Stmt\Return_(
            new \PhpParser\Node\Expr\PropertyFetch(
                new \PhpParser\Node\Expr\Variable('this'), 'name'
            )
        ))
        ->getNode();

    $printer = new Standard();
    echo $printer->prettyPrint([$method]);

?>
```

## See Also

+ [Rector](https://getrector.com/)
+ [phpMyEdit](https://www.phpmyedit.org/)

Related : [Code Generator](Code Generator), [Metaprogramming](Metaprogramming), [Template Metaprogramming (TMP)](Template Metaprogramming (TMP)), [Homoiconicity](Homoiconicity), [Attribute](Attribute), [Reflection](Reflection), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Rector](Rector), [Scaffolding](Scaffolding)

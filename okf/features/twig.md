---
type: "PHP Feature"
title: "Twig"
description: "Twig is a template engine for PHP, created by ``SensioLabs`` and used as the default templating layer of the Symfony framework."
resource: "https://twig.symfony.com/doc/3.x/"
tags: ["brand", "template engine"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Twig

Twig is a template engine for PHP, created by ``SensioLabs`` and used as the default templating layer of the Symfony framework. It is also used standalone in many other projects, such as Drupal, Craft CMS, and countless custom applications.

Twig separates presentation from business logic by offering its own, restricted syntax, delimited by ``{{ }}`` for output, ``{% %}`` for control structures, and ``{# #}`` for comments, that compiles down to plain PHP for execution. Because template code cannot arbitrarily call any PHP function or access superglobals, Twig sandboxes what designers and untrusted template authors can do, and automatically escapes output to prevent XSS by default.

Key Twig features include template inheritance with ``{% extends %}`` and ``{% block %}``, reusable includes and macros, filters such as ``|upper`` or ``|date``, and an extension system that lets applications expose custom functions and filters to templates.

```php
<?php

    require_once __DIR__ . '/vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
    $twig = new \Twig\Environment($loader);

    echo $twig->render('user.html.twig', [
        'name' => 'Alice',
        'roles' => ['admin', 'editor'],
    ]);

?>
```

## Documentation
- [https://twig.symfony.com/doc/3.x/](https://twig.symfony.com/doc/3.x/)

## See Also
- [Twig tutorial](https://riptutorial.com/twig)

## Related
- [View](/features/view.md)
- [Template](/features/template.md)
- [Symfony](/features/symfony.md)
- [Model - View - Controller (MVC)](/features/mvc.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [HyperText Markup Language (HTML)](/features/html.md)
- [Blade](/features/blade.md)

## Details
- Packagist: [twig/twig](https://packagist.org/packages/twig/twig)


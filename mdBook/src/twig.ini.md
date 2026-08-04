# Twig
Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework. It is also used standalone in many other projects, such as Drupal, Craft CMS, and countless custom applications.

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

## See Also

+ [Twig tutorial](https://riptutorial.com/twig)

Related : [View](View), [Template](Template), [Symfony](Symfony), [Model - View - Controller (MVC)](Model - View - Controller (MVC)), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [HyperText Markup Language (HTML)](HyperText Markup Language (HTML))

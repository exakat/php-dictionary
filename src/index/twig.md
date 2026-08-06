# Twig
Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework. It is also used standalone in many other projects, such as Drupal, Craft CMS, and countless custom applications.

Twig separates presentation from business logic by offering its own, restricted syntax, delimited by ``{{ }}`` for output, ``{% %}`` for control structures, and ``{# #}`` for comments, that compiles down to plain PHP for execution. Because template code cannot arbitrarily call any PHP function or access superglobals, Twig sandboxes what designers and untrusted template authors can do, and automatically escapes output to prevent XSS by default.

Key Twig features include template inheritance with ``{% extends %}`` and ``{% block %}``, reusable includes and macros, filters such as ``|upper`` or ``|date``, and an extension system that lets applications expose custom functions and filters to templates.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/twig.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/twig.html","name":"Twig","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:16 +0000","dateModified":"Wed, 05 Aug 2026 08:17:16 +0000","description":"Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Twig.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://twig.symfony.com/doc/3.x/)**
## See Also

+ [Twig tutorial](https://riptutorial.com/twig)

## Related

+ [View](view.ini.html)
+ [Template](template.ini.html)
+ [Symfony](symfony.ini.html)
+ [Model - View - Controller (MVC)](mvc.ini.html)
+ [Cross Site Scripting (XSS)](xss.ini.html)
+ [HyperText Markup Language (HTML)](html.ini.html)
+ [Blade](blade.ini.html)

## Related packages

+ [twig/twig](https://packagist.org/packages/twig/twig)

# Twig
Twig is a template engine for PHP, created by ``SensioLabs`` and used as the default templating layer of the Symfony framework. It is also used standalone in many other projects, such as Drupal, Craft CMS, and countless custom applications.

Twig separates presentation from business logic by offering its own, restricted syntax, delimited by ``{{ }}`` for output, ``{% %}`` for control structures, and ``{# #}`` for comments, that compiles down to plain PHP for execution. Because template code cannot arbitrarily call any PHP function or access superglobals, Twig sandboxes what designers and untrusted template authors can do, and automatically escapes output to prevent XSS by default.

Key Twig features include template inheritance with ``{% extends %}`` and ``{% block %}``, reusable includes and macros, filters such as ``|upper`` or ``|date``, and an extension system that lets applications expose custom functions and filters to templates.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/twig.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/twig.html","name":"Twig","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 07:59:09 +0000","dateModified":"Sat, 08 Aug 2026 07:59:09 +0000","description":"Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Twig.html"]}],"keywords":["brand","template engine"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/view.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/symfony.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mvc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/blade.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/twig.symfony.com\/doc\/3.x\/"},{"@type":"CreativeWork","name":"Twig tutorial","url":"https:\/\/riptutorial.com\/twig"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"twig"}]}]}</script>
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

+ [View](view.html)
+ [Template](template.html)
+ [Symfony](symfony.html)
+ [Model - View - Controller (MVC)](mvc.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [HyperText Markup Language (HTML)](html.html)
+ [Blade](blade.html)

## Related packages

+ [twig/twig](https://packagist.org/packages/twig/twig)

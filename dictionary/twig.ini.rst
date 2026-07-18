.. _twig:
.. meta::
	:description:
		Twig: Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Twig
	:twitter:description: Twig: Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Twig
	:og:type: article
	:og:description: Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/twig.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/twig.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/twig.ini.html","name":"Twig","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:37:17 +0000","dateModified":"Fri, 17 Jul 2026 08:37:17 +0000","description":"Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Twig.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Twig
----

Twig is a template engine for PHP, created by SensioLabs and used as the default templating layer of the Symfony framework. It is also used standalone in many other projects, such as Drupal, Craft CMS, and countless custom applications.

Twig separates presentation from business logic by offering its own, restricted syntax, delimited by ``{{ }}`` for output, ``{% %}`` for control structures, and ``{# #}`` for comments, that compiles down to plain PHP for execution. Because template code cannot arbitrarily call any PHP function or access superglobals, Twig sandboxes what designers and untrusted template authors can do, and automatically escapes output to prevent XSS by default.

Key Twig features include template inheritance with ``{% extends %}`` and ``{% block %}``, reusable includes and macros, filters such as ``|upper`` or ``|date``, and an extension system that lets applications expose custom functions and filters to templates.

.. code-block:: php
   
   <?php
   
       require_once __DIR__ . '/vendor/autoload.php';
   
       $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
       $twig = new \Twig\Environment($loader);
   
       echo $twig->render('user.html.twig', [
           'name' => 'Alice',
           'roles' => ['admin', 'editor'],
       ]);
   
   ?>


`Documentation <https://twig.symfony.com/doc/3.x/>`__

See also `Twig tutorial <https://riptutorial.com/twig>`_.

Related : :ref:`View <view>`, :ref:`Template <template>`, :ref:`Symfony <symfony>`, , , :ref:`Model - View - Controller (MVC) <mvc>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`HyperText Markup Language (HTML) <html>`

Related packages : `twig/twig <https://packagist.org/packages/twig/twig>`_

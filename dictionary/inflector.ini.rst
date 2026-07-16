.. _inflector:
.. meta::
	:description:
		Inflector: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inflector
	:twitter:description: Inflector: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Inflector
	:og:type: article
	:og:description: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inflector.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/inflector.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/inflector.ini.html","name":"Inflector","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:11:09 +0000","dateModified":"Thu, 16 Jul 2026 08:11:09 +0000","description":"An inflector processes strings to adapt them for various situations, such as singular\/plural, or for uppercase\/lowercase","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Inflector.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Inflector
---------

An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.

Typical inflector operations include pluralizing and singularizing nouns, ``browsers`` to ``browser``, converting between naming conventions such as ``camelCase``, ``snake_case``, and ``kebab-case``, deriving class or table names from words ``classify()``, ``tableize()``, and producing ordinal forms ``1st``, ``2nd``. Because English pluralization has many irregular forms such as ``child``/``children``, ``mouse``/``mice``, inflectors rely on ordered rule tables and exception lists rather than a single suffix rule.

In the PHP ecosystem, ``doctrine/inflector`` is the most widely used standalone implementation and is also embedded inside Doctrine ORM for generating table and column names from entity and property names; Symfony's ``symfony/string`` component ships its own ``Inflector`` service; Laravel's ``Illuminate\Support\Str::plural()``/``singular()`` helpers perform the equivalent inflection; and CakePHP bundles inflection rules in its utility package for generating model and route names.

.. code-block:: php
   
   <?php
   
       // example using doctrine/inflector
       
       $inflector = InflectorFactory::create()->build();
       echo $inflector->singularize('browsers'); // browser
   
   ?>


`Documentation <https://www.doctrine-project.org/projects/inflector.html>`__

Related : :ref:`Internationalization <localisation>`

Related packages : `doctrine/inflector <https://packagist.org/packages/doctrine/inflector>`_, `symfony/inflector <https://packagist.org/packages/symfony/inflector>`_, `cakephp/utility <https://packagist.org/packages/cakephp/utility>`_

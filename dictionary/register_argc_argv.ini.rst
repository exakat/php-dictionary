.. _register_argc_argv:
.. meta::
	:description:
		register_argc_argv: This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: register_argc_argv
	:twitter:description: register_argc_argv: This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: register_argc_argv
	:og:type: article
	:og:description: This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/register_argc_argv.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"register_argc_argv","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 13:19:01 +0000","dateModified":"Thu, 22 Jan 2026 13:19:01 +0000","description":"This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/register_argc_argv.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


register_argc_argv
------------------

This directive controls the availability of the ``$argv`` and ``$argc`` PHP native variables. By default, the directive is active and the variables are available.

.. code-block:: php
   
   <?php
   
   if (ini_get('register_argc_argv')) {
       var_dump($argv);
   } else {
       print '$argv and $argc are disabled.';
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.register-argc-argv>`__

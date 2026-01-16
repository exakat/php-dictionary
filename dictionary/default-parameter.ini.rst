.. _default-parameter:
.. meta::
	:description:
		Default Parameter: Methods may define a default value for parameters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Default Parameter
	:twitter:description: Default Parameter: Methods may define a default value for parameters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Default Parameter
	:og:type: article
	:og:description: Methods may define a default value for parameters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/default-parameter.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Default Parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:01:22 +0000","dateModified":"Fri, 16 Jan 2026 17:01:22 +0000","description":"Methods may define a default value for parameters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Default Parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Default Parameter
-----------------

Methods may define a default value for parameters. That way the parameter may be omitted during the call, and this value will be used. 

The default value may be a static expression, and, since PHP 8.1, also include new expression. 

The default parameter must be the last of the parameters : adding a parameter without default value after one will yield an error and mess up the call parameters.

.. code-block:: php
   
   <?php
   
   function makeCodffe($type = 'latte') {
       return \Making a cup of $latte\;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.arguments.default>`__

Related : :ref:`Functions <function>`, :ref:`Method <method>`

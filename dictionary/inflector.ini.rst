.. _inflector:
.. meta::
	:description:
		Inflector: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Inflector
	:twitter:description: Inflector: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase
	:twitter:creator: @exakat
	:og:title: Inflector
	:og:type: article
	:og:description: An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inflector.ini.html
	:og:locale: en


Inflector
---------

An inflector processes strings to adapt them for various situations, such as singular/plural, or for uppercase/lowercase.

.. code-block:: php
   
   <?php
   
   // example using doctrine/inflector
   
   $inflector = InflectorFactory::create()->build();
   echo $inflector->singularize('browsers'); // browser
   
   
   ?>


See also `doctrine inflector <https://www.doctrine-project.org/projects/inflector.html>`_

Related : :ref:`Internationalization <localisation>`

Related packages : `doctrine/inflector <https://packagist.org/packages/doctrine/inflector>`_, `symfony/inflector <https://packagist.org/packages/symfony/inflector>`_, `cakephp/utility <https://packagist.org/packages/cakephp/utility>`_

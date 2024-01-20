.. _inflector:

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

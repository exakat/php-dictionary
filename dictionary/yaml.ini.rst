.. _yaml:
.. meta::
	:description:
		YAML: ``YAML``, which stands for ``YAML Ain't Markup Language`` (a playful recursive acronym), is a human-readable data serialization format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: YAML
	:twitter:description: YAML: ``YAML``, which stands for ``YAML Ain't Markup Language`` (a playful recursive acronym), is a human-readable data serialization format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: YAML
	:og:type: article
	:og:description: ``YAML``, which stands for ``YAML Ain't Markup Language`` (a playful recursive acronym), is a human-readable data serialization format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/yaml.ini.html
	:og:locale: en


YAML
----

``YAML``, which stands for ``YAML Ain't Markup Language`` (a playful recursive acronym), is a human-readable data serialization format. It is often used for configuration files, data exchange between languages with different data structures, and general-purpose data storage. YAML is designed to be easy for humans to read and write while also being easy for machines to parse and generate.

.. code-block:: php
   
   
   <?php
   
   $yaml = <<<YAML
   ---
   title: "The title" 
   date: "2001-01-23" 
   amount: 251.420000
   ...
   YAML;
   
   $parsed = yaml_parse($yaml);
   var_dump($parsed);
   
   ?>


`Documentation <https://yaml.org/>`__

See also `php-yaml <https://pecl.php.net/package/yaml>`_, `PHP YAML <https://www.php.net/manual/en/book.yaml.php>`_

Related packages : `symfony/yaml <https://packagist.org/packages/symfony/yaml>`_, `mustangostang/spyc <https://packagist.org/packages/mustangostang/spyc>`_

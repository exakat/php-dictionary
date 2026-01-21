.. _$_env:
.. meta::
	:description:
		$_ENV: The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: $_ENV
	:twitter:description: $_ENV: The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: $_ENV
	:og:type: article
	:og:description: The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/$_env.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"$_ENV","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 16:03:20 +0000","dateModified":"Wed, 21 Jan 2026 16:03:20 +0000","description":"The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/$_ENV.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


$_ENV
-----

The ``$_ENV`` variable is a special superglobal variable that is used to retrieve the environment values. 

The ``$_ENV`` variable is an associative array where the keys are the global variables and the values are the corresponding values. 

$_ENV is a superglobal : it is always available, in every scope.

Values inside $_ENV are always strings. 

The values in the $_ENV are collected at the start of the script, and do no change during the life time of the script. To get an up to date value, the function getenv() is preferable.

The content of the ``$_ENV`` array varies from installation to installation : there is no default list of keys in that array. It entirely depends on the underlying system.


.. code-block:: php
   
   <?php
   
   // Displays the name of the user
   echo $_ENV['USER'];
   
   print_r($_ENV);
   // Results is similar to this 
   /**
   Array
   (
       [TERM] => xterm
       [PATH] => /usr/bin:/bin
       [LANG] => C
       [SHELL] => /bin/sh
       [MAIL] => /var/mail/nobody
       [LOGNAME] => nobody
       [USER] => nobody
       [HOME] => /tmp
   )
   */
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.environment.php>`__

Related : :ref:`$_GET <$_get>`, :ref:`$_COOKIE <$_cookie>`, :ref:`$_POST <$_post>`, :ref:`$_REQUEST <$_request>`, :ref:`$_FILES <$_files>`, :ref:`$_SERVER <$_server>`

.. _session:
.. meta::
	:description:
		Session: Session support in PHP consists of a way to preserve certain data across subsequent accesses.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Session
	:twitter:description: Session: Session support in PHP consists of a way to preserve certain data across subsequent accesses
	:twitter:creator: @exakat
	:og:title: Session
	:og:type: article
	:og:description: Session support in PHP consists of a way to preserve certain data across subsequent accesses
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/session.ini.html
	:og:locale: en


Session
-------

Session support in PHP consists of a way to preserve certain data across subsequent accesses.

It relies on the ``session_*`` functions, and the ``$_SESSION`` superglobal variable.


.. code-block:: php
   
   <?php
   
   if (isset($_SESSION['x'])) {
       print "x was already set with the value ".$_SESSION['x'];
   }
   
   $_SESSION['x'] = rand(0, 10);
   print "Giving the value ".$_SESSION['x']." to x, in the session\n";
   
   ?>


`Documentation <https://www.php.net/manual/en/book.session.php>`__

See also `Session in PHP: Creating, Destroying, and Working With Session in PHP <https://www.simplilearn.com/tutorials/php-tutorial/session-in-php>`_

Related : :ref:`Superglobal Variables <superglobal>`

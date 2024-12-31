.. _needle:
.. meta::
	:description:
		Needle: Needle is a classic name, used to designate the object of a search.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Needle
	:twitter:description: Needle: Needle is a classic name, used to designate the object of a search
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Needle
	:og:type: article
	:og:description: Needle is a classic name, used to designate the object of a search
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/needle.ini.html
	:og:locale: en


Needle
------

Needle is a classic name, used to designate the object of a search. For example, with the functions strstr(), strpos(), strrchr(), array_search(), mb_strstr(), Grapheme::stristr(), etc. 

This name refers to the expression 'to search for a needle in a haystack': when something is difficult to find in a large stack. In this context, the haystack is usually the data that is searched, while the needle is the thing that is searched for.

Often, the haystack is the first argument, and the needle the second one, although it is not systematic (cf array_search()). With named parameters, the 'needle' name made its way in the PHP syntax.

.. code-block:: php
   
   <?php
   
   var_dump(array_search(needle: 'b', haystack: 'abc'))
   
   ?>


See also `strstr <http://www.php.net/strstr>`_, `strpos <http://www.php.net/strpos>`_, `strrchr <http://www.php.net/strrchr>`_, `array_search <http://www.php.net/array_search>`_, `what is 'needle' and 'haystack' in PHP ?? <https://teamtreehouse.com/community/what-is-needle-and-haystack-in-php>`_

Related : :ref:`Haystack <haystack>`

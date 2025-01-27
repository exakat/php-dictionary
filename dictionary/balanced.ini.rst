.. _balanced:
.. meta::
	:description:
		Balanced: A pair of token is balanced when the opening token has a corresponding unique closing token.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Balanced
	:twitter:description: Balanced: A pair of token is balanced when the opening token has a corresponding unique closing token
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Balanced
	:og:type: article
	:og:description: A pair of token is balanced when the opening token has a corresponding unique closing token
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/balanced.ini.html
	:og:locale: en


Balanced
--------

A pair of token is balanced when the opening token has a corresponding unique closing token. 

Tokens that needs balancing : 

+ parenthesis, with ``(`` and ``)``
+ curly bracket, with ``{`` and ``}``
+ variable delimiters with curly bracket, with ````
+ square bracket, with ``[`` and ``]``
+ single quotes, with ``'``
+ double quotes, with ``"``
+ oblic quotes, with ``\```

Quotes are the same for opening and closing tokens. 

The listed tokens must be nested: after an opening token, any new opening token must be closed before the first one can be closed.

Inside quotes, the brackets and parenthesis may be unbalanced, as the accountability is turned off. This is not the case for curly brackets, 

Closing tokens are assigned to the last opening token: in case of mismatch, it produces a syntax error.

.. code-block:: php
   
   <?php
   
   $x = ([;
   
   $y = '])(['; // this is OK inside quotes
   $y = "\
   "; // the curly brackets must be balanced when they enclose a variable or valid PHP expression.
   
   ?>


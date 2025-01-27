.. _flag:
.. meta::
	:description:
		Flag: A flag is another name for an option.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Flag
	:twitter:description: Flag: A flag is another name for an option
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Flag
	:og:type: article
	:og:description: A flag is another name for an option
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/flag.ini.html
	:og:locale: en


Flag
----

A flag is another name for an option. Often, flags are booleans: they are either on, or off. 

Flags are often consecutive powers of 2, so they can be merged together by addition ``+`` or by logical or ``|``, and passed as one. 

Example of flags: 

+ preg_match(), 4th argument: PREG_OFFSET_CAPTURE and PREG_UNMATCHED_AS_NULL;
+ json_decode(), 4th argument: JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR;
+ ArrayObject::setFlags, 1rst argument: 	ArrayObject::STD_PROP_LIST or ArrayObject::ARRAY_AS_PROPS


Related : , :ref:`Directives <directive>`, :ref:`Configuration <configuration>`

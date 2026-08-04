# Flag
A flag is another name for an option. Often, flags are booleans: they are either on, or off. 

Flags are often consecutive powers of 2, so they can be merged together by addition ``+`` or by logical or ``|``, and passed as one. 

Example of flags: 

+ ``preg_match()``, 4th argument: ``PREG_OFFSET_CAPTURE`` and ``PREG_UNMATCHED_AS_NULL``;
+ ``json_decode()``, 4th argument: ``JSON_BIGINT_AS_STRING``, ``JSON_INVALID_UTF8_IGNORE``, ``JSON_INVALID_UTF8_SUBSTITUTE``, ``JSON_OBJECT_AS_ARRAY``, ``JSON_THROW_ON_ERROR``;
+ ``ArrayObject::setFlags()``, 1rst argument: 	``ArrayObject::STD_PROP_LIST`` or ``ArrayObject::ARRAY_AS_PROPS``.
Related : [Option](Option), [Directives](Directives), [Configuration](Configuration)

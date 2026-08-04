# Escape Data
Escaping data is a method to write data in a neutral syntax for a target technology. 

For example, angular brackets and quotes are special characters for HTML: to display them without their actual HTML meaning, they have to be escaped as HTML entities, such as ``&quote`` or ``&gt;``. 

Escaping applies to technologies which mix raw strings and executable expression: ``SQL``, ``CSV``, ``HTML``, ``LDAP``, etc. 

Escaping data replace some symbols with a longer sequence of symbols. The escaping is made with a special character, which must itself be escaped. For example, CSV escapes anti-slash with a double anti-slash.

PHP supports escape sequences for characters in a string. This is the same concept of escaping data: there, the target includes portability.
Related : [HTML Escaping](HTML Escaping), [Escape Sequences](Escape Sequences), [Escape Character](Escape Character), [CSV Injection](CSV Injection), [CRLF Injection](CRLF Injection), [escapeshellarg()](escapeshellarg()), [escapeshellcmd()](escapeshellcmd()), [LDAP Injection](LDAP Injection)

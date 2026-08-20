# Escape Data
Escaping data is a method to write data in a neutral syntax for a target technology. 

For example, angular brackets and quotes are special characters for HTML: to display them without their actual HTML meaning, they have to be escaped as HTML entities, such as ``&quote`` or ``&gt;``. 

Escaping applies to technologies which mix raw strings and executable expression: ``SQL``, ``CSV``, ``HTML``, ``LDAP``, etc. 

Escaping data replace some symbols with a longer sequence of symbols. The escaping is made with a special character, which must itself be escaped. For example, CSV escapes anti-slash with a double anti-slash.

PHP supports escape sequences for characters in a string. This is the same concept of escaping data: there, the target includes portability.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-data.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-data.html","name":"Escape Data","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 11:55:08 +0000","dateModified":"Sun, 09 Aug 2026 11:55:08 +0000","description":"Escaping data is a method to write data in a neutral syntax for a target technology","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Escape Data.html"]}],"alternateName":["escaping-data","escape"],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-html.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-sequence.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escape-character.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/csv-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/crlf-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellarg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/escapeshellcmd.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ldap-injection.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp-top-10-proactive-controls-2018.readthedocs.io\/en\/latest\/c4-encode-escape-data.html"},{"@type":"CreativeWork","name":"OWASP XSS Prevention Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Cross_Site_Scripting_Prevention_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"htmlspecialchars","url":"https:\/\/www.php.net\/manual\/en\/function.htmlspecialchars.php"},{"@type":"CreativeWork","name":"PDO prepared statements","url":"https:\/\/www.php.net\/manual\/en\/pdo.prepared-statements.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"escape-data"}]}]}</script>
**[Documentation](https://owasp-top-10-proactive-controls-2018.readthedocs.io/en/latest/c4-encode-escape-data.html)**
## See Also

+ [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)
+ [htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php)
+ [PDO prepared statements](https://www.php.net/manual/en/pdo.prepared-statements.php)

## Related

+ [HTML Escaping](escape-html.html)
+ [Escape Sequences](escape-sequence.html)
+ [Escape Character](escape-character.html)
+ [CSV Injection](csv-injection.html)
+ [CRLF Injection](crlf-injection.html)
+ [escapeshellarg()](escapeshellarg.html)
+ [escapeshellcmd()](escapeshellcmd.html)
+ [LDAP Injection](ldap-injection.html)

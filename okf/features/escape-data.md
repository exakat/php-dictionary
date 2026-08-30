---
type: "PHP Feature"
title: "Escape Data"
description: "Escaping data is a method to write data in a neutral syntax for a target technology."
resource: "https://owasp-top-10-proactive-controls-2018.readthedocs.io/en/latest/c4-encode-escape-data.html"
tags: ["security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Escape Data

Escaping data is a method to write data in a neutral syntax for a target technology. 

For example, angular brackets and quotes are special characters for HTML: to display them without their actual HTML meaning, they have to be escaped as HTML entities, such as ``&quote`` or ``&gt;``. 

Escaping applies to technologies which mix raw strings and executable expression: ``SQL``, ``CSV``, ``HTML``, ``LDAP``, etc. 

Escaping data replace some symbols with a longer sequence of symbols. The escaping is made with a special character, which must itself be escaped. For example, CSV escapes anti-slash with a double anti-slash.

PHP supports escape sequences for characters in a string. This is the same concept of escaping data: there, the target includes portability.

## Documentation
- [https://owasp-top-10-proactive-controls-2018.readthedocs.io/en/latest/c4-encode-escape-data.html](https://owasp-top-10-proactive-controls-2018.readthedocs.io/en/latest/c4-encode-escape-data.html)

## See Also
- [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)
- [htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php)
- [PDO prepared statements](https://www.php.net/manual/en/pdo.prepared-statements.php)

## Related
- [HTML Escaping](/features/escape-html.md)
- [Escape Sequences](/features/escape-sequence.md)
- [Escape Character](/features/escape-character.md)
- [CSV Injection](/features/csv-injection.md)
- [CRLF Injection](/features/crlf-injection.md)
- [escapeshellarg()](/features/escapeshellarg.md)
- [escapeshellcmd()](/features/escapeshellcmd.md)
- [LDAP Injection](/features/ldap-injection.md)


---
type: "concept"
title: "Disable"
description: "To disable is to prevent a feature from performing."
resource: "https://www.php.net/manual/en/ini.core.php#ini.disable-functions"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Disable

To disable is to prevent a feature from performing. For example, using ``disable_functions=foo`` prevents the function ``foo`` from being available at the start of execution, even if PHP has a definition for it. The function ``foo`` cannot be run anymore, unless defined again.

Another example is ``memory_limit=-1``, which sets the maximum memory used by a PHP application to ``-1``, effectively disabling the control of the maximum amount of used memory.

Putting a piece of code in a comment is a way to disable it: it cannot be run anymore.

To disable implies a permanent state: it is different from a conditional statement.

## Documentation
- [https://www.php.net/manual/en/ini.core.php#ini.disable-functions](https://www.php.net/manual/en/ini.core.php#ini.disable-functions)

## See Also
- [Disabling functions using the PHP disable_functions directive](https://kb.hosting.com/docs/php-disable_functions-directive)
- [PHP.INI settings Disable exec, shell_exec, system, popen and Other Functions To Improve Security](https://www.cyberciti.biz/faq/linux-unix-apache-lighttpd-phpini-disable-functions/)

## Related
- [Enable](/features/enable.md)
- [Disable Functions](/features/disable-functions.md)


; <?php exit(1); __halt_compiler();
; Quick hack to stop configuration file being exposed: all you see using a
; browser now is a semi-colon.



[DEBUG]
DEBUG_MODE = ON

[SERVER]
SERVER = memcache
PORT = 11211

[AUTH]
PASSWORD = 8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918

[MISC]
PHP_TIMEZONE = UTC



; ?>
; end the fake PHP (see hack above)

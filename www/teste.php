<?php

putenv('LC_ALL=en_US');
setlocale(LC_ALL, 'en_US', 'en_US.utf8');

//bind_textdomain_codeset('messages', 'UTF8');
bindtextdomain('messages', "../lang");
textdomain('messages');

echo gettext('Inicio');

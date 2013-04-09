<?php
/**
 * Please be avare, if yours system don't has locale
 * used in script (ru_RU for this sample) this locale
 * translate string will be ignored
 */

//set location of messages.mo files for translate domain
bindtextdomain("messages", "./locale");

//set codeset for translation domain
bind_textdomain_codeset("messages", 'UTF-8');

//set current translation domain
textdomain("messages");

//set current script locale
setlocale(LC_ALL, 'ru_RU.UTF-8'); // устанавливаем локаль

echo _('Hello') . "\n";

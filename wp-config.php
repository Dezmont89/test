<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<XXZ!|]ys*WtNw--TqOM1BNC1uZF(^:`?|1)`D#!0~C`rO)v5D)S$P!cb-&K3i[f');
define('SECURE_AUTH_KEY',  'pRh$q,Zr9?Z^YkA)#n&XeME/Ln3T]}8Y,|oTdUMcbxqB.~`yZk<Z)9GHgY8ocHj/');
define('LOGGED_IN_KEY',    '1FCYt}{AUQXQEMDq.i3q??ggWa/yw6uW2~fBBbUN6+?NNlw/o*b*Kp`{JpXI%NoP');
define('NONCE_KEY',        'tH|4Z-p-]xa?h@5GGG3;MEW])?idu7/N[=aK4}-k#y&Op:)fy?sUve_s&<x,bSjH');
define('AUTH_SALT',        'g6-i$0<,Gl,J0[XEhlr3=nh@~$dLtR<htI=2$T(79y$L7M+h;+ N}H[(Y+o*Q%Gk');
define('SECURE_AUTH_SALT', 'VU(/0bL`E`#/Eb2UNdAU3tn2rYVduo}WD7:_*F2hW5sbwc-wq(,2xN*N}%Ez@j25');
define('LOGGED_IN_SALT',   '*?)(>5f>~y^}pG#W{G#k7)wRDn=Mf}Z297wuzMwfcd<=%uHd31-;5[]K,3s(mX${');
define('NONCE_SALT',       'c[f:]jW#| 4-MrKc !kyg5[n`HwR9)-N6=e2N{yW}Ma=,~L|Gr2+[DKs#!,c8*C(');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

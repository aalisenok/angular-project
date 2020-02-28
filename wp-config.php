<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'base' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EYNt--HGXQ@)7VBa`GPW3{};HJqDF=C1ngsjHr@U$G)*72!]j(jp|Jbp5Q^ajI8u' );
define( 'SECURE_AUTH_KEY',  '&Rb6 n6iM&HhG~8`SA7f,~@(qEsHddmz>Zl&D`))|#iGqvUh3:O?t}4GO_REcX|[' );
define( 'LOGGED_IN_KEY',    'bKl0M8BWXL?/{%`c;tM7[[TOG!E1z-jaW<Z5hz}Ym28jqNQvhz?m$8Cjebgq@jwb' );
define( 'NONCE_KEY',        '0_2Ur{i:E7u{ t@zbWFdZopN(`#5y~(Gc7AD_VD7^qe4?%[AQuD?kSRQT1lWuyH%' );
define( 'AUTH_SALT',        '{VL.uH,N74}j#/jDk=`w*z7A[/&EOWHtr&]x;V@*:ZhiQ>_dBEBZ#@h8O$W3_)@G' );
define( 'SECURE_AUTH_SALT', 'vn0%Ur,9]xT*kpV]PIO/,v/GS8OK9S-04WvkqX/2 [LlL$G/p7jT1@q6YM;[Gv%S' );
define( 'LOGGED_IN_SALT',   '(,IRN<WO~a`LUxb0@sU=hWaF6G%?>?lf`EG%[i0P<xLMH9^B0v:<r ;|xEO^p?&o' );
define( 'NONCE_SALT',       '%Ws8kqxi^{#`RsY:GpK)ErZNIH.Qu~eYM3z/:m@s0f :vOhr@(R[9?NlvCCp|7zz' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );

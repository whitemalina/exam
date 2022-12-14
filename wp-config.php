<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tv_ZLihvph-qR+qU~;R.Y_xb;*t2e_vLn?Gm/^-yHvxEGcHg`;nGjl[ .2{W4tx1' );
define( 'SECURE_AUTH_KEY',  'R{`H+=HXiiu *A!z0syG4bQ+l!gSq6Ak}xIXW%_X*qK ]45hxF^P+^}<O<Lc21KO' );
define( 'LOGGED_IN_KEY',    'sQo-t?2;P^Z!a]C(P+~*tR>,0tUK,`)P~}<#IRl82).Fdn&qHL3gLX}M/oP~dmDO' );
define( 'NONCE_KEY',        ',pp{^VX.%3&]_ryDn]jCyZ+tt$_Y0C%2`2q;J}cz{wZTr_t#jZPIia[:c}Km][:W' );
define( 'AUTH_SALT',        'L(tI1^jNKV;G/P32mac*U7N$/m.y& (Y]4Xzuou8s* Ket-U;4[{NWenNxE(FP~Q' );
define( 'SECURE_AUTH_SALT', '(fqc8JWbVFzp^5!y%$jmaTEEkVI`;j+<?(:v0Omw:C3y2}cZ^-R@};oF{~mYe;&K' );
define( 'LOGGED_IN_SALT',   ',vXVc,p.&P?#Op,q@*_ Ma+w5D}D=dh^pzDGBcy:a|kv1muAGeryaa1Ne7B1R6jc' );
define( 'NONCE_SALT',       'd_<4a)yHg5bh`Ta38Z~zP><PDr,WLcV2*P[evVX(=-G]rT8zwa:jgMG_a>ke():o' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

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
define( 'DB_NAME', '845-21_15047' );

/** Имя пользователя базы данных */
define( 'DB_USER', '845-21_15047' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'daad1bb413efab56ebc9' );

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
define( 'AUTH_KEY',         '6DZ<Fh~C41YC,H4~S4Jhrehl%z&%_!zH?)7QrN=_lE5gP;m2okDRypN6!1Y[3X?A' );
define( 'SECURE_AUTH_KEY',  '(Wwm0hC2*?N9$<:X$B:gP_(iwYyy8zE$f>/J*aZ%Zs%[(fOwY)D!@8rrzLBp]_Lt' );
define( 'LOGGED_IN_KEY',    'YD);*jD,vK5vzT9z#FSX}#|0y<dQ8PEiW3/MC6~boUb6dd2wwfHrXcuT},$.n5Tc' );
define( 'NONCE_KEY',        'P#vz=yvRtO7a yJ*Xm(A0V(|F:$Pq.-7-,Xb9,8D*|4+c1.M[_-y>])%w0[4[ m9' );
define( 'AUTH_SALT',        'o>5/ ^E3}b!]KDkXOPJ)2*Y^3;Kh9Juk9Z!W-8tH2MO~n9SI]u_}Wq>b^@-~,9 f' );
define( 'SECURE_AUTH_SALT', '(HAZGLK3XtqR(s*k7?|Gw&]N^$zvdp.KZ:x.8pm* Ar zVGl5y$U&Q=ke]AR.{^m' );
define( 'LOGGED_IN_SALT',   '$d4tU[{.JEdN6lYsdov628B){csB#O-zxT)[F3%po|kP=wFSul2[IhtnH}6`_53L' );
define( 'NONCE_SALT',       'Z!V#@:b!Y~5:aqQ&yGti]laeJlF<I9:n+PYM]x}k~Tf<O}Tx} F$7c@RmBU%<Qde' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'Osksn_';


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
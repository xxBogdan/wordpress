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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp.ru' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' `wmiB_zvy*fiIl%M:uogz<m5O:C,h<(KL#Kb`ov&zG`/6&B[1CH-7v){U):RtYU' );
define( 'SECURE_AUTH_KEY',  '_TU6QXC3 ,Zd;HX2(@l6X7|Cc)dLX=09S3-_qK>R&7}ilqcNx}=W;L?iWooRmqH!' );
define( 'LOGGED_IN_KEY',    ' C047tF;5t!/SPga4V1C@#eM2lX&7Md:?w9}2 Ax]-Nd7[Hv:KO/)dwvf]$ckWcN' );
define( 'NONCE_KEY',        '76f4B?),v]5kjB><1>2SbNAunffNzT7X>r/ZosBo./&:5+!2}PHF6(r:?sj.+Y61' );
define( 'AUTH_SALT',        '>sU#!2aWPy}@q)AP7+`[I!7N^`a&.Dk5NJx!q%bNZ/LoQJJK[r_Q_!<p&hWxt34g' );
define( 'SECURE_AUTH_SALT', '$9=m`qDNtyr$^T1v:s(3-..$-Lpw{u*a~h;?nZG&bAFIH~.t52dY%^6R%C$=EdI;' );
define( 'LOGGED_IN_SALT',   '@?]>zY2p6RXz$h_yu)36^ nXW.3>uGQ,wcxi9M>l!P?0Mi>`N1sQ: WdMh%?Hz*e' );
define( 'NONCE_SALT',       'ate$gB]1~>K4[IB*8S#u ?2c]]w|$6`[|Zyvegy2W)H9s;35|aH|Z*E|78nq}P+ ' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

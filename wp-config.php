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
define( 'DB_NAME', 'nextpage' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         '|^j,mQ+d|PkY 6,j{Y%A}$fcFZDBR3^K1) ;.K?+]*8a]tDtY_yv,sgCY-:d6uQm' );
define( 'SECURE_AUTH_KEY',  '|C0uM/C4;ISh07Svgi@vFc<6@j4w su0-ioJ?/YOf9kYSuSigYlRDFuQAgj(x};d' );
define( 'LOGGED_IN_KEY',    '<|Nm]h6;^!W8C*su-(.z8t Hr(aQMY0GUGN#:y)9yFPHL,nTY9 (Ti>G*P<P&]+X' );
define( 'NONCE_KEY',        'H$_Q/$8Fw/n)ca|6yc8>i<OkE!Q4Mr_B=&8;!1)mw#KUlCk3%xaJ~?:Moh+*yqmW' );
define( 'AUTH_SALT',        '7(7Szr}odzj+K>u(T75}^Ok*Z xk5Fg5*lV{!r+^87`>ihrE*MgB0R_~-C3>&a#m' );
define( 'SECURE_AUTH_SALT', 'z3XB64~GE=~k9h>zxP:*9=$(%Yeeu6Vot>M39&J[>^YgZr@]&z5D*8|o:53$Ax<e' );
define( 'LOGGED_IN_SALT',   'o8ZyT-K!P$-wS{*NHt<nq]D$WuCE27Gx|)AbVENZ%xHV@r^m/%2]v{X6a<vIl0{+' );
define( 'NONCE_SALT',       'p?+(e@j<]?j|v:]w*uq_qNVh@e;8*t$/GmZa#(EArYnNT;%s;MC|!Fq|d[c823=N' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'nxtp_';

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

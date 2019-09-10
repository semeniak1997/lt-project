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
define( 'DB_NAME', 'lt-project' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'lt-project' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'nB5yZ1Ap' );

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
define( 'AUTH_KEY',         'l#8+k!|-C2pp7JH$kX0qq[o&,Wm[^|(4OF_akh{<Y!V{`;%wC0SRKnF3D?0DAnJ@' );
define( 'SECURE_AUTH_KEY',  ',tlKVU9LDD5*CV$ksU]ad/DWSnpbK(2P&Su_c>&&t|GVuOF8mZ@7zL,4bZa~Y|4z' );
define( 'LOGGED_IN_KEY',    'kXzu7a<-zDI2.GQ|Geh>%@rLB^[O(w68z4}kE8Q1$ 7_3*vqJ4s|;VtN*+l.>fz#' );
define( 'NONCE_KEY',        'd=ATO{1LgTCA+SLKMQ_*r$M1_w|l{l:N<-x+:-FW@3Zj]|W1erV:k$:kIA#4f7JW' );
define( 'AUTH_SALT',        '->JKa6G|</$-udZZ2%wubJ;,!*Hhj*K(cxezyRn7q0p5&4$$B:IH;H oic`{ OJT' );
define( 'SECURE_AUTH_SALT', 'B6k1u^bP/+xOtMn;F~L@]!v]2HY<<s1>XRs[9%dPhthJHkn3Srt{dMVM2tpTRNmj' );
define( 'LOGGED_IN_SALT',   'I|3Tov`Lg|N!dbUZzDe(FK<lYsllcf%mbNDF_Ex>s8:-_LK&v5<0tj40VJiiK2GG' );
define( 'NONCE_SALT',       'LG*wa:K,?bat2yvK{pE ^#pSD*E:%S?jwc2dM43-.@grP*-Jp0yE$B*qjU4LjwNE' );

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

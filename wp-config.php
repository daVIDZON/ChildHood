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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'childhood_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'bogomolov65616' );

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
define( 'AUTH_KEY',         'X=9=u1 *dT`;=7bb.hV4*A1}hTUai2#=]HP5~fWZ!p-l=e;EMKQI/TJFYQkI;qdj' );
define( 'SECURE_AUTH_KEY',  '!@XOWbQeKCbglc,[<{t|-NsouxA5=MTeg=/]R3l/P+G2Q<HpU{RDF{isG4q3TQ9x' );
define( 'LOGGED_IN_KEY',    'GJ8X/$eA5bc}@.9 1]C:8II/&xB]EU>J^;nFq)f`|!u{t+rvM-zt[Y{#_G%JAe~;' );
define( 'NONCE_KEY',        'esp7++/W4PS.{YMSg>Y3Rwtj+9`D)!6R6mBS9r`O?8iU T,Y~ucb`ERYHe;Z7;^g' );
define( 'AUTH_SALT',        'huaU4iWmng! :(/OD$yM4^%iZ2DO[E574_7Sv~b!N.d>-7NF{YWVes?tdo?_:`~}' );
define( 'SECURE_AUTH_SALT', '>=UfP#QRYb}m`I|s&~89;na9ANAH{=2;{.(>Kh=nE6emH)6wt;>jMEmC6e`)Q[)v' );
define( 'LOGGED_IN_SALT',   'W+#as^A}Y]eu9hIZwFKV[m#/Hx~d*^Qm;^.&m|}Gi|N|!SpnZ+}I6KM4KJ0YWjH6' );
define( 'NONCE_SALT',       'aoxn1W4z>csDZS^,nkUQ7my.*-W=Olr)`<Idx+[p/[1u~DHV*@2`Y_{^ASO2KY!>' );

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

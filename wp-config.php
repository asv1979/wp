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
define('DB_NAME', 'wp_test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'rq&k>vGSc$$]5-|w=kKmrl>tGv:$9jWgbIn2#zy?>D^P?7U%-vl>}JeF/Q`6uTW(');
define('SECURE_AUTH_KEY', '}bvSQdhel<WJ~LHQMI<C2S8&28a(!?7{|zz &c-xibvMt, yZ%L+}z6ERE]*.;i(');
define('LOGGED_IN_KEY', 'M}I-CL2] -[w4x]DkMAT&&onT<Z=l02{]>Kr2>B|]%]D K;z)KasIDLv8I,8}l.Y');
define('NONCE_KEY', '<b=g72^=U;IDiRD$|Mt<x%|nV<sgGUU50oI[,RV;Haw3{QQ[q,R2!VdiF^m,&nb!');
define('AUTH_SALT', ',Rb8S4?rvvYzaI6^>g~Q+W5q:l+Y]+V]K0H?8yY)J?{,O3PRcsk:XJcHVUcg@PN:');
define('SECURE_AUTH_SALT', '3a{K-YXi[TnMk?Hb(W;azt_U1A1/5~`-oyW~Ee;V{M4A=,fVp5h/Y)*p)w>dsRzK');
define('LOGGED_IN_SALT', '.gK/hLAxo]2g^zk#UwqTpOD:82c5qR3n*^z>$Tu!NH2Hb9 Plmon/42]9x9]38m_');
define('NONCE_SALT', '(%8xv@R1jr(-QDItt_yr(Yx7`g5/?D-Ykar(N.`gTGbzNRmh}OMp$*-<?7|C%xHi');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');


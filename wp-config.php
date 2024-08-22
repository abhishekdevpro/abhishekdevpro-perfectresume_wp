<?php
define( 'WP_CACHE', true );

define('CONCATENATE_SCRIPTS', false);

/** The name of the database for WordPress */
define('DB_NAME', 'perfectr_perfect');
/** MySQL database username */
define('DB_USER', 'perfectr_perfect');
/** MySQL database password */
define('DB_PASSWORD', 'perfectr_perfect');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'GVze+4{%S]I9-E+-^ZTqe/}OkvzNi:+uP#CS*-&aLxOR~Z0 (rJH|]r`iL:,IC!+');
define('SECURE_AUTH_KEY',  'TR1A)kJ%R&rWANe)w!.BI-VmK+dgw<Ql)+q/1)$VVfr4e&8H{9/-])w(Ztj,e5[*');
define('LOGGED_IN_KEY',    '5@Ug5!)+ebWO-Z7=x[?t|g+)PEwuU5fRs|YXqj7b_~0k|>Tol)jKIfpiT91gh>A ');
define('NONCE_KEY',        'lN h.9<UJu+?:fu:{+M]$vylnmp-+1w-gN#-5FHeus+<a.rs[NoZUxMs0bY@N{jL');
define('AUTH_SALT',        '=nPP|tpJh|@q/$#`v7ya7L+)|;=/RE/u-=G(u6, 2N-%vW:GSva 2@-ZsbEB?uuI');
define('SECURE_AUTH_SALT', 'B {V68K!yx!vx(,8sG^G#OlG_jv?]Obgha10sN%JI]2$]<y 6{SVZ/eKv16WZ||C');
define('LOGGED_IN_SALT',   't@_?R0RPFUOp6E=7mi;ua|KGqSn<>M)cP3Xf7UxN|Y3h852.3ec4T*[Ac+9A}rP-');
define('NONCE_SALT',       'K-=cR5cWJ4~pH{i-7Xoyi-BPf;wp+J0k*XWCo^I$$!|7i-T3fZ.kpm_8d~]!jwNH');

$table_prefix = 'hbd5_';

define('FORCE_SSL_ADMIN', true);

define( 'WP_DEBUG', false );

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');

<? define("SHORT_INSTALL_CHECK", true);?><?

//define("SHORT_INSTALL_CHECK", true);
define("SHORT_INSTALL", true);

define("DBPersistent", false);
$DBType = "mysql";
$DBHost = "localhost";
$DBLogin = "cu92072_0";
$DBPassword = "M6UaG7JL";
$DBName = "cu92072_0";
$DBDebug = false;
$DBDebugToFile = false;
mb_internal_encoding('Windows-1251');
@set_time_limit(60);

define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);
define("BX_COMP_MANAGED_CACHE", true);

define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~BX_DIR_PERMISSIONS);
@ini_set("memory_limit", "512M");
define("BX_DISABLE_INDEX_PAGE", true);
define("BX_USE_MYSQLI", true);


setlocale(LC_ALL, 'ru_RU.CP1251');
setlocale(LC_NUMERIC,'C');

?>

<?php
/**
*
* acp_search [Hungarian]
*
* @package language
* @version $Id$
* @copyright (c) 2007 „Magyar phpBB Közösség fordítók”
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Original copyright: (c) 2005 phpBB Group
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Itt a keresőmodulok indexeit kezelheted. Mivel alapvetően csak egy modult használsz, a többi nem használt modul indexeit érdmes törölnöd. Néhány kereső beállítás megváltoztatása után (pl. a karakterek minimum és maximum száma) tanácsos az indexeket újra létrehozni, hogy azok tükrözzék a változtatásokat.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Itt beállíthatod, hogy a fórum melyik keresőmodult használja a hozzászólások indexeléséhez és a keresésekhez. Emellett további beállításokat adhatsz meg, melyek ezeknek a műveleteknek a teljesítményigényét befolyásolják. A beállítások egy része az összes keresőmodulnál ugyanaz.', //?

	'COMMON_WORD_THRESHOLD'					=> 'Gyakori szó küszöb', //? 'Gyakori szó küszöb', 'Általános/átlagos/mindennapi szó hatérérték' stb.
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'A szavak, melyek a hozzászólások ennél nagyobb százalékában megtalálhatók, gyakorinak lesznek tekintve. A gyakori szavak mellőzésre kerülnek a keresési kifejezésből. A kikapcsoláshoz állítsd 0-ra. Csak akkor lesz alkalmazva, ha 100-nál több hozzászólás van. Ha felül szeretnéd vizsgálni a már gyakorinak tekintett szavakat, újra létre kell hoznod az indexet.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Biztosan át akarsz váltani egy másik keresőmodulra? A váltás után létre kell hoznod az új keresőmodulhoz tartozó indexet. Ha nem tervezel visszaváltani a régi keresőmodulhoz, törölheted az ahhoz tartozó indexet, ezáltal is fölszabadítva a rendszer erőforrásait.',
	'CONTINUE_DELETING_INDEX'				=> 'Korábbi indexeltávolítási folyamat folytatása',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Egy indexeltávolítási folyamat el lett indítva. Hogy hozzáférj a keresőindex oldalhoz, először azt be kell fejezned, vagy törölnöd kell.', //?
	'CONTINUE_INDEXING'						=> 'Korábbi indexelési folyamat folytatása',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Egy indexelési folyamat el lett indítva. Hogy hozzáférj a keresőindex oldalhoz, először azt be kell fejezned, vagy törölnöd kell.',
	'CREATE_INDEX'							=> 'Index létrehozása',

	'DELETE_INDEX'							=> 'Index törlése',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Index törlése folyamatban',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'A keresőmodul jelenleg megtisztítja az indexét. Ez eltarthat néhány percig.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'A MySQL fulltext modul csak MySQL4-gyel vagy újabbal használható.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'A MySQL fulltext index csak MyISAM vagy InnoDB táblákkal használható. InnoDB típusú táblák használata esetén legalább 5.6.4-es verziószámú MySQL szükséges.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Indexelt hozzászólások száma',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Legalább ennyi karakterből álló szavak kerülnek indexelésre. Ez a beállítás csak a MySQL konfigurációban történő változtatással módosítható, amit lehet, hogy csak a szolgáltatód tud megtenni.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'Legfeljebb ennyi karakterből álló szavak kerülnek indexelésre. Ez a beállítás csak a MySQL konfigurációban történő változtatással módosítható, amit lehet, hogy csak a szolgáltatód tud megtenni.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'The PostgreSQL fulltext backend can only be used with PostgreSQL.', //bb31
	'FULLTEXT_POSTGRES_TS_NOT_USABLE'	=> 'The PostgreSQL fulltext backend can only be used with PostgreSQL 8.3 and above.', //bb31
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Total number of indexed posts', //bb31
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'PostgreSQL version', //bb31
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Text search Configuration Profile:', //bb31
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Minimum word length for keywords', //bb31
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Maximum word length for keywords', //bb31
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'This search backend requires PostgreSQL version 8.3 and above.', //bb31
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'The Text search configuration profile used to determine the parser and dictionary.', //bb31
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Words with at least this many characters will be included in the query to the database.', //bb31
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Words with no more than this many characters will be included in the query to the database.', //bb31

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Configure the following settings to generate sphinx config file', //bb31
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Path to data directory', //bb31
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'It will be used to store the indexes and log files. You should create this directory outside the web accessible directories. (should have a trailing slash)', //bb31
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Number of posts in frequently updated delta index', //bb31
	'FULLTEXT_SPHINX_HOST'					=> 'Sphinx search daemon host', //bb31
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host on which the sphinx search daemon (searchd) listens. Leave empty to use the default localhost', //bb31
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Indexer memory limit', //bb31
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'This number should at all times be lower than the RAM available on your machine. If you experience periodic performance problems this might be due to the indexer consuming too many resources. It might help to lower the amount of memory available to the indexer.', //bb31
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Number of posts in main index', //bb31
	'FULLTEXT_SPHINX_PORT'					=> 'Sphinx search daemon port', //bb31
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Port on which the sphinx search daemon (searchd) listens. Leave empty to use the default Sphinx API port 9312', //bb31
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'The sphinx search for phpBB supports MySQL and PostgreSQL only.', //bb31
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Sphinx config file', //bb31
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'The generated content of the sphinx config file. This data needs to be pasted into the sphinx.conf which is used by sphinx search daemon.', //bb31
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'The sphinx data and config directory paths are not defined. Please define them to generate the config file.', //bb31

	'GENERAL_SEARCH_SETTINGS'				=> 'Általános kereső beállítások',
	'GO_TO_SEARCH_INDEX'					=> 'Tovább a keresőindex oldalra',

	'INDEX_STATS'							=> 'Index statisztikák',
	'INDEXING_IN_PROGRESS'					=> 'Indexelés folyamatban',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'A keresőmodul éppen indexeli a fórum összes hozzászólását. Ez a fórum nagyságától függően néhány percig, de akár néhány óráig is eltarthat.',

	'LIMIT_SEARCH_LOAD'						=> 'Kereső oldal rendszerterhelés korlát',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Ha a rendszer egy perces átlagos terhelése meghaladja ezt az értéket, akkor a kereső oldal nem lesz elérhető. Az 1.0 érték megegyezik egy processzor ~100%-os igénybevételével. A funkció csak UNIX alapú rendszereken működik.',

	'MAX_SEARCH_CHARS'						=> 'Maximum indexelt karakterszám', //? 'Maximum indexelt karakter'
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'A kereső csak a legfeljebb ennyi karaktert tartalmazó szavakat fogja indexelni.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Kulcsszavak maximum száma',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Egyszerre legfeljebb ennyi szóra lehet keresni. A 0 érték megszünteti a korlátozást.',
	'MIN_SEARCH_CHARS'						=> 'Minimum indexelt karakterszám',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'A kereső csak a legalább ennyi karaktert tartalmazó szavakat fogja indexelni.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Minimum szerző karakterszám',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'A felhasználóknak, ha jokerkaraktert használva keresnek rá egy felhasználóra, legalább ennyi karaktert meg kell adniuk a névből. Ha a felhasználó neve ennél kevesebb karakterből áll, a teljes felhasználónév megadásával még mindig rá lehet keresni a hozzászólásaira.',

	'PROGRESS_BAR'							=> 'Haladás',

	'SEARCH_GUEST_INTERVAL'					=> 'Vendég keresési flood időköz',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'A vendégeknek két keresés között ennyi másodpercet kell várniuk. Ha egy felhasználó végez egy keresést, az összes többinek várnia kell az időköz leteltéig.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'A %1$d azonosítóig terjedő hozzászólások lettek eddig indexelve, ebből %2$d ebben a lépésben.<br />Az indexelés jelenlegi sebessége körülbelül %3$.1f hozzászólás per másodperc.<br />Indexelés folyamatban…',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'The current rate of indexing is approximately %1$.1f posts per second.<br />Indexing in progress…', //bb31
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'All posts up to post id %2$d have been removed from the search index.<br />Deleting in progress…', //bb31
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> 'A %1$d azonosítóig terjedő hozzászólások el lettek távolítva a keresőindexből.<br />Törlés',
	'SEARCH_INDEX_CREATED'					=> 'A fórum adatbázisában lévő összes hozzászólás sikeresen indexelésre került.',
	'SEARCH_INDEX_REMOVED'					=> 'A modul keresőindexe sikeresen törlésre került.',
	'SEARCH_INTERVAL'						=> 'Felhasználói keresési időköz',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'A felhasználóknak két keresés között ennyi másodpercet kell várniuk. Ez az időköz az egyes  felhasználóknál külön-külön kerül ellenőrzésre.', //? 'Ez az időköz az egyes  felhasználókra külön-külön vonatkozik'
	'SEARCH_STORE_RESULTS'					=> 'Keresési eredmény gyorsítótárazásának hossza',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'A gyorsítótárazott keresési eredmények ennyi másodperc elteltével járnak le. A kereső gyorsítótár kikapcsolásához állítsd 0-ra .',
	'SEARCH_TYPE'							=> 'Keresőmodul', //? 'Keresőmotor'?!
	'SEARCH_TYPE_EXPLAIN'					=> 'A phpBB lehetővé teszi, hogy kiválaszd milyen motor legyen használva a hozzászólások tartalmában való kereséshez. Alapból a phpBB saját fulltext keresője lesz használva.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Keresőmodult váltottál. Hogy az új keresőmotort használni tudd, győződj meg róla, hogy a kiválasztott keresőmodulhoz való index létezik.',

	'TOTAL_WORDS'							=> 'Indexelt szavak száma',
	'TOTAL_MATCHES'							=> 'Szó–hozzászólás kapcsolatok száma',

	'YES_SEARCH'							=> 'Keresés funkciók bekapcsolása',
	'YES_SEARCH_EXPLAIN'					=> 'Lehetővé teszi a keresők használatát, ide értve a felhasználókeresőt is.',
	'YES_SEARCH_UPDATE'						=> 'Fulltext frissítés bekapcsolása',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Fulltext indexek frissítése hozzászóláskor, a keresés kikapcsolása felülírja.',
));
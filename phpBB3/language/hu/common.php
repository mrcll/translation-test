<?php
/** 
*
* common [Hungarian]
*
* @package language
* @version $Id: common.php,v 1.22 2007-03-03 21:02:44 fberci Exp $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
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
	'TRANSLATION_INFO'	=> 'Magyar fordítás &copy; <a href="http://phpbb.hu/">Magyar phpBB Közösség</a>',
	'DIRECTION'			=> 'ltr',
	'DATE_FORMAT'		=> '|Y.m.d.|',
	'USER_LANG'			=> 'hu-hu',

	'1_DAY'			=> '1 nap',
	'1_MONTH'		=> '1 hónap',
	'1_YEAR'		=> '1 év',
	'2_WEEKS'		=> '2 hét',
	'3_MONTHS'		=> '3 hónap',
	'6_MONTHS'		=> '6 hónap',
	'7_DAYS'		=> '7 nap',

	'ACCOUNT_ALREADY_ACTIVATED'		=> 'Az azonosítód már aktiváltuk.',
	'ACCOUNT_NOT_ACTIVATED'			=> 'Az azonosítód még nem aktiváltuk.',
	'ACP'							=> 'Adminisztrátori vezérlőpult',
	'ACTIVE'						=> 'aktív',
	'ACTIVE_ERROR'					=> 'Inaktív felhasználónevet adtál meg. Kérjük aktiváld az azonosítód, és próbálkozz újra. Ha továbbra is gondjaid lennének, lépj kapcsolatba az adminisztrátorral.', //? - problémáid <> gondjaid
	'ADMINISTRATOR'					=> 'Adminisztrátor',
	'ADMINISTRATORS'				=> 'Adminisztrátorok',
	'AGE'							=> 'Kor',
	'AIM'							=> 'AIM',
	'ALLOWED'						=> 'Engedélyezett',
	'ALL_FILES'						=> 'Összes állomány', //? Valószínűleg az összes elég lenne - majd meglátjuk
	'ALL_FORUMS'					=> 'Összes fórum', //?
	'ALL_MESSAGES'					=> 'Összes üzenet', //?
	'ALL_POSTS'						=> 'Összes hozzászólás', //?
	'ALL_TIMES'						=> 'Időzóna: %1$s %2$s',
	'ALL_TOPICS'					=> 'Összes téma', //?
	'AND'							=> 'és',
	'ARE_WATCHING_FORUM'			=> 'Sikeresen feliratkoztál erre a fórumra.',
	'ARE_WATCHING_TOPIC'			=> 'Sikeresen feliratkoztál erre a témára.',
	'ASCENDING'						=> 'Növekvő', //? 'Növekvő sorrend'?
	'ATTACHMENTS'					=> 'Csatolmányok',
	'AUTHOR'						=> 'Szerző',
	'AUTH_NO_PROFILE_CREATED'		=> 'Nem sikerült létrezhoni a felhasználói profilt.', //?? "Creating a user profile failed" - hol van használva?
	'AVATAR_DISALLOWED_EXTENSION'	=> 'A %s kiterjesztés nem engedélyezett.',
	'AVATAR_EMPTY_REMOTE_DATA'		=> 'Nem sikerült feltölteni az avatart, a külső forrás hibás.',
	'AVATAR_INVALID_FILENAME'		=> 'Hibás állománynév: %s',
	'AVATAR_NOT_UPLOADED'			=> 'Nem sikerült feltölteni az avatart.',
	'AVATAR_NO_SIZE'				=> 'Nem sikerült meghatározni a belinkelt avatar szélességét és magasságát, kérjük add meg kézzel.',
	'AVATAR_PARTIAL_UPLOAD'			=> 'Az avatart csak részben sikerült feltölteni.',
	'AVATAR_PHP_SIZE_NA'			=> 'Az avatar állomány mérete túl nagy.<br />Nem sikerült megállapítani a PHP php.ini-jében meghatározott maximum méretet.',
	'AVATAR_PHP_SIZE_OVERRUN'		=> 'Az avatar állomány mérete túl nagy, a maximum feltölthető méret %d MB.<br />Kérjük vedd figyelembe, hogy ez a php.ini-ben van meghatározva ezért nem írható felül.',
	'AVATAR_URL_INVALID'			=> 'A megadott URL hibás.',
	'AVATAR_URL_NOT_FOUND'			=> 'A megadott állomány nem található.',
	'AVATAR_WRONG_FILESIZE'			=> 'Az avatarnak 0 és %1d %2s között kell lennie.',
	'AVATAR_WRONG_SIZE'				=> 'Az avatar szélességének %1$d és %3$d pixel között, magasságának %2$d és %4$d pixel között kell lennie. A megadott avatar %5$d pixel széles, és %6$d pixel magas.', //? 'Az avatarnak legalább %1$d pixel szélesnek és %2$d pixel magasnak, valamint legfeljebb %3$d pixel szélesnek és 4$d pixel magasnak kell lennie.'

	'BACK_TO_TOP'			=> 'Vissza az elejére',
	'BACK_TO_PREV'			=> 'Vissza az előző oldalra',
	'BAN_TRIGGERED_BY_EMAIL'=> 'Az e-mail címed alapján tiltottak ki.', //? "This ban has been issued on your email address." - hol fordul elő
	'BAN_TRIGGERED_BY_IP'	=> 'Az IP-címed alapján tiltottak ki.', //?
	'BAN_TRIGGERED_BY_USER'	=> 'A felhasználóneved alapján tiltottak ki.', //?
	'BBCODE_GUIDE'			=> 'BBCode ismertető', //? útmutató
	'BCC'					=> 'Titkos másolat',
	'BIRTHDAYS'				=> 'Születésnaposok',
	'BOARD_BAN_PERM'		=> '<strong>Tartósan</strong> kitiltottak erről a fórumról.<br /><br />További információért lépj kapcsolatba a %2$sfórum adminisztátorával%3$s.', //? (tartósan - permanently)
	'BOARD_BAN_REASON'		=> 'Kitiltás oka: <strong>%s</strong>',
	'BOARD_BAN_TIME'		=> '<strong>%1$s</strong>-ig kitiltottak erről a fórumról.<br /><br />További információért lépj kapcsolatba a %2$sfórum adminisztátorával%3$s.',
	'BOARD_DISABLE'			=> 'A fórum jelenleg nem elérhető.', //?
	'BOARD_DISABLED'		=> 'A fórum ideiglenesen szünetel.', //?
	'BOARD_UNAVAILABLE'		=> 'A fórum ideiglenesen nem elérhető, kérlek próbálkozz újra pár perc múlva.', //?
	'BROWSING_FORUM_GUEST'	=> 'Jelenlévő fórumozók: %1$s és %2$d vendég',
	'BROWSING_FORUM_GUESTS'	=> 'Jelenlévő fórumozók: %1$s és %2$d vendég',
	'BYTES'					=> 'bájt',

	'CANCEL'				=> 'Mégsem',
	'CHANGE'				=> 'Változtat', //? ha néhány helyen nem jó így, akkor visszaalakítjuk változtatássá (a többi hasonló gombfelirattal együtt?)
	'CHANGE_FONT_SIZE'		=> 'Betűméret megváltoztatása',
	'CHANGING_PREFERENCES'	=> 'Fórum beállítások megváltoztatása',
	'CHANGING_PROFILE'		=> 'Profil megváltoztatása',
	'CLICK_VIEW_PRIVMSG'	=> '%sBejövő fiók megtekintése%s',
	'CLOSE_WINDOW'			=> 'Ablak bezárása',
	'COLOUR_SWATCH'			=> 'Szín kiválasztása',
	'COMMA_SEPARATOR'		=> ', ', // Used in pagination and secret yet-to-be-release style, use localised comma if appropiate, eg: Ideographic or Arabic
	'CONFIRM'				=> 'Elküld', //? pl. gombok felirat (!) - pl. post details (mcp) -- jobb mint a megerősítés...?
	'CONFIRM_CODE'			=> 'Megerősítő kód',
	'CONFIRM_CODE_EXPLAIN'	=> 'Add meg a képen látható kódot. A kis- vagy nagybetűk nem számítanak, valamint nincs nulla.',
	'CONFIRM_CODE_WRONG'	=> 'A megadott megerősítő kód hibás.',
	'CONFIRM_OPERATION'		=> 'Biztosan végre akarod hajtani ezt a műveletet?',
	'CONGRATULATIONS'		=> 'Gratulálunk',
	'CONNECTION_FAILED'		=> 'Sikertelen kapcsolódási kísérlet',
	'CONNECTION_SUCCESS'	=> 'Sikerült csatlakozni!',
	'COOKIES_DELETED'		=> 'A fórum sütijei törlésre kerültek.', //? sütik - cookie
	'CURRENT_TIME'			=> 'Pontos idő: %s',

	'DAY'					=> 'nap',
	'DAYS'					=> 'nap',
	'DELETE'				=> 'Törlés',
	'DELETE_ALL'			=> 'Összes törlése',
	'DELETE_COOKIES'		=> 'Fórum sütik törlése', //? sütik - cookie
	'DELETE_MARKED'			=> 'Kijelöltek törlése',
	'DELETE_POST'			=> 'Hozzászólás törlése',
	'DELIMITER'				=> 'Határolójel', //? elválasztó
	'DESCENDING'			=> 'Csökkenő', //? 'Csökkenő sorrend'?
	'DISABLED'				=> 'Kikapcsolva',
	'DISPLAY'				=> 'Megjelenítés',
	'DISPLAY_GUESTS'		=> 'Vendégek megjelenítése',
	'DISPLAY_MESSAGES'		=> 'Üzenetek megtekintése', //?
	'DISPLAY_POSTS'			=> 'Hozzászólások megjelenítése', //?
	'DISPLAY_TOPICS'		=> 'Témák megjelenítése', //?
	'DOWNLOADED'			=> 'Letöltve',
	'DOWNLOADING_FILE'		=> 'Állomány letöltése',
	'DOWNLOAD_COUNT'		=> '%d alkalommal.',
	'DOWNLOAD_COUNTS'		=> '%d alkalommal.',
	'DOWNLOAD_NONE'			=> '0 alkalommal.',

	'EDIT_POST'							=> 'Hozzászólás szerkesztése',
	'EMAIL'								=> 'E-mail',
	'EMAIL_ADDRESS'						=> 'E-mail cím',
	'EMAIL_SMTP_ERROR_RESPONSE'			=> 'Problémába ütköztünk egy levél elküldése során a <strong>%1$s.</strong> sorban. Válasz: %2$s',
	'EMPTY_SUBJECT'						=> 'Új téma indításához meg kell adnod a címét.',
	'ENABLED'							=> 'Bekapcsolva',
	'ENCLOSURE'							=> 'Enclosure(!)', //???
	'ERR_CHANGING_DIRECTORY'			=> 'Nem sikerült megváltoztatni a könyvtárat.',
	'ERR_CONNECTING_SERVER'				=> 'Nem sikerült csatlakozni a szerverhez.',
	'ERR_UNABLE_TO_LOGIN'				=> 'Hiba a belépéskor. Rossz felhasználónév vagy jelszó.',
	'ERR_WRONG_PATH_TO_PHPBB'			=> 'A megadott phpBB elérési útvonal feltehetőleg hibás.',
	'EXPAND_VIEW'						=> 'Expand view(!)', //??!
	'EXTENSION'							=> 'Kiterjesztés',
	'EXTENSION_DISABLED_AFTER_POSTING'	=> 'A <b>%s</b> kiterjesztés deaktiválva lett, ezért a csatolmány nem lesz megjelenítve.',

	'FAQ'					=> 'Gy.i.k.',
	'FAQ_EXPLAIN'			=> 'Gyakran ismételt kérdések',

	'FILENAME'				=> 'Állomány neve',
	'FILESIZE'				=> 'Állomány mérete',
	'FILEDATE'				=> 'Állomány feltöltve', //? dátuma?
	'FILE_COMMENT'			=> 'Magyarázat', //?! megjegyzés?
	'FILE_NOT_FOUND'		=> 'A keresett állomány nem található.',
	'FIND_USERNAME'			=> 'Felhasználó keresése',
	'FOLDER'				=> 'Fiók',
	'FORGOT_PASS'			=> 'Elfelejtettem a jelszavam',
	'FORUM'					=> 'Fórum',
	'FORUMS'				=> 'Fórumok',
	'FORUMS_MARKED'			=> 'Minden fórumot megjelelöltünk olvasottként.',
	'FORUM_CAT'				=> 'Fórum kategória',
	'FORUM_INDEX'			=> 'Fórum kezdőlap',
	'FORUM_LINK'			=> 'Fórum link',
	'FORUM_LOCATION'		=> 'Tevékenység', //?! viewonline - csak írtam valamit, hogy ne felejtsem el
	'FORUM_LOCKED'			=> 'Lezárt fórum',
	'FORUM_RULES'			=> 'Fórum szabályok',
	'FORUM_RULES_LINK'		=> 'Kattints ide a fórum szabályainak megtekintéséhez',
	'FROM'					=> 'Feladó:', //??!
	'FSOCK_DISABLED'		=> 'Nem sikerült végrehajtani a műveletet, mivel az fsock funkciók nincsenek engedélyezve, vagy az elérni kívánt szerver nem található.',

	'FTP_FSOCK_HOST'				=> 'FTP hoszt',
	'FTP_FSOCK_HOST_EXPLAIN'		=> 'Az oldalad eléréséhez használt FTP kiszolgáló.', //?
	'FTP_FSOCK_PASSWORD'			=> 'FTP jelszó',
	'FTP_FSOCK_PASSWORD_EXPLAIN'	=> 'Az FTP felhasználónévhez tartozó jelszó.',
	'FTP_FSOCK_PORT'				=> 'FTP port',
	'FTP_FSOCK_PORT_EXPLAIN'		=> 'AZ FTP szerver portja.',
	'FTP_FSOCK_ROOT_PATH'			=> 'PhpBB elérési út',
	'FTP_FSOCK_ROOT_PATH_EXPLAIN'	=> 'A phpBB elérési útja az FTP gyökérkönyvtárától (ami alapból megnyílik).',
	'FTP_FSOCK_TIMEOUT'				=> 'FTP időtúllépés',
	'FTP_FSOCK_TIMEOUT_EXPLAIN'		=> 'Legfeljebb ennyit fog várni a rendszer a válaszra a szervertől másodpercben megadva.',
	'FTP_FSOCK_USERNAME'			=> 'FTP felhasználónév',
	'FTP_FSOCK_USERNAME_EXPLAIN'	=> 'A szerverhez való csatlakozáshoz használt felhasználónév.',

	'FTP_HOST'					=> 'FTP hoszt',
	'FTP_HOST_EXPLAIN'			=> 'Az oldalad eléréséhez használt FTP szerver.', //?
	'FTP_PASSWORD'				=> 'FTP jelszó',
	'FTP_PASSWORD_EXPLAIN'		=> 'Az FTP felhasználónévhez tartozó jelszó.',
	'FTP_PORT'					=> 'FTP port',
	'FTP_PORT_EXPLAIN'			=> 'AZ FTP szerver portja.',
	'FTP_ROOT_PATH'				=> 'PhpBB elérési út',
	'FTP_ROOT_PATH_EXPLAIN'		=> 'A phpBB elérési útja az FTP gyökérkönyvtárától (ami alapból megnyílik).',
	'FTP_TIMEOUT'				=> 'FTP várakozási limit',
	'FTP_TIMEOUT_EXPLAIN'		=> 'Legfeljebb ennyit fog várni a rendszer a válaszra a szervertől másodpercben megadva.',
	'FTP_USERNAME'				=> 'FTP felhasználónév',
	'FTP_USERNAME_EXPLAIN'		=> 'A szerverhez való csatlakozáshoz használt felhasználónév.',

	'GO'						=> 'Mehet', //?
	'GOTO_PAGE'					=> 'Oldal', //? - valami jó kis módszer kéne (: - nem jó mindenhova)
	'GROUP'						=> 'Csoport',
	'GROUPS'					=> 'Csoportok',
	'GROUP_ERR_DESC_LONG'		=> 'A csoport leírása túl hosszú.',
	'GROUP_ERR_TYPE'			=> 'Helytelen csoport típust adtál meg.', //? "Inappropriate"
	'GROUP_ERR_USERNAME'		=> 'Nem adtad meg a csoport nevét.',
	'GROUP_ERR_USER_LONG'		=> 'A csoport neve túl hosszú.',
	'GUEST'						=> 'Vendég',
	'GUEST_USERS_ONLINE'		=> '%d vendég van jelen.',
	'GUEST_USERS_TOTAL'			=> '%d vendég.',
	'GUEST_USERS_ZERO_ONLINE'	=> '0 vendég van jelen.',
	'GUEST_USERS_ZERO_TOTAL'	=> '0 vendég.',
	'GUEST_USER_ONLINE'			=> '%d vendég van jelen.',
	'GUEST_USER_TOTAL'			=> '%d vendég.',
	'G_ADMINISTRATORS'			=> 'Adminisztrátorok',
	'G_BOTS'					=> 'Robotok',
	'G_GUESTS'					=> 'Vendégek',
	'G_REGISTERED'				=> 'Regisztrált felhasználók',
	'G_REGISTERED_COPPA'		=> 'Regisztrált COPPA felhasználók',
	'G_GLOBAL_MODERATORS'		=> 'Globális moderátorok', //? Általános, szuper?

	'HIDDEN_USERS_ONLINE'		=> '%d rejtett felhasználó van jelen.',
	'HIDDEN_USERS_TOTAL'		=> '%d rejtett és ',
	'HIDDEN_USERS_ZERO_ONLINE'	=> '0 rejtett felhasználó van jelen.',
	'HIDDEN_USERS_ZERO_TOTAL'	=> '0 rejtett és ',
	'HIDDEN_USER_ONLINE'		=> '%d rejtett felhasználó van jelen.',
	'HIDDEN_USER_TOTAL'			=> '%d rejtett és ',
	'HIDE_GUESTS'				=> 'Vendégek elrejtése',
	'HIDE_ME'					=> 'Bejelentkezés rejtettként', //? Jelenlét elrejtése
	'HOURS'						=> 'óra',
	'HOME'						=> 'Főoldal', //? - hol használják?

	'ICQ'						=> 'ICQ',
	'ICQ_STATUS'				=> 'ICQ állapot',	
	'IF'						=> 'Ha',
	'IMAGE'						=> 'Kép',
	'IMAGE_FILETYPE_INVALID'	=> 'A %d kiterjesztésű %s MIME típusú kép nem támogatott.',
	'IMAGE_FILETYPE_MISMATCH'	=> 'Nem stimmel a kép kiterjesztése: %1$s helyett %2$s.',
	'IN'						=> 'Fórum:', //?
	'INDEX'						=> 'Kezdőlap megtekintése', //? remélem jó
	'INFORMATION'				=> 'Információ',
	'INTERESTS'					=> 'Érdeklődési kör',
	'INVALID_DIGEST_CHALLENGE'	=> 'Hibás feltárási kérés', //??? "Invalid digest challenge"
	'INVALID_EMAIL_LOG'			=> 'A <strong>%s</strong> felthetőleg egy nem létező e-mail cím.',
	'IP'						=> 'IP-cím',
	'IP_BLACKLISTED'			=> 'Az IP-címed tiltólistára került, ezért blokkoltuk a hozzáférésed a fórumhoz. További információ: <a href="%2$s">%2$s</a>.',

	'JABBER'				=> 'Jabber',
	'JOINED'				=> 'Csatlakozott',
	'JUMP_PAGE'				=> 'Add meg annak az oldalnak a számát, ahová menni szeretnél',
	'JUMP_TO'				=> 'Ugrás',
	'JUMP_TO_PAGE'			=> 'Kattints ide egy fel nem sorolt oldalra való ugráshoz.',

	'KB'					=> 'KB',

	'LAST_POST'							=> 'Utolsó hozzászólás',
	'LAST_UPDATED'						=> 'Legutóbb frissített',
	'LAST_VISIT'						=> 'Utolsó látogatás',
	'LDAP_NO_LDAP_EXTENSION'			=> 'Az LDAP kiterjesztés nem elérhető.',
	'LDAP_NO_SERVER_CONNECTION'			=> 'Nem sikerült csatlakozni az LDAP szerverhez.',
	'LEGEND'							=> 'Magyarázat',
	'LOCATION'							=> 'Tartózkodási hely',
	'LOCK_POST'							=> 'Hozzászólás lezárása',
	'LOCK_POST_EXPLAIN'					=> 'A felhasználó nem fogja tudni szerkeszteni a hozzászólást.',
	'LOCK_TOPIC'						=> 'Téma lezárása',
	'LOGIN'								=> 'Belépés',
	'LOGIN_CHECK_PM'					=> 'Privát üzeneteid olvasásához lépj be',
	'LOGIN_CONFIRMATION'				=> 'Belépés megerősítése',
	'LOGIN_CONFIRM_EXPLAIN'				=> 'Az azonosítók feltörésének megakadályozása érdekében egy bizonyos számú sikertelen belépési kísérlet után meg kell adnod egy megerősítő kódot. A kód az alábbi képen található. Ha látási (vagy egyéb) problémák folytán nem tudnád elolvasni a kódot, vedd fel a kapcsolatot a %sfórum adminisztrátorával%s.',
	'LOGIN_ERROR_ATTEMPTS'				=> 'Túllépted az engedélyezett belépési kísérletek számát. Ezért a felhasználóneved és a jelszavad mellett most meg kell adnod az alábbi képen látható megerősítő kódot is.',
	'LOGIN_ERROR_EXTERNAL_AUTH_APACHE'	=> 'Az Apache-nak nem sikerült azonosítania téged.', //? - kicsit jobb megfogalmazás kéne (bár az angol se túl jó)
	'LOGIN_ERROR_PASSWORD'				=> 'Rossz jelszót adtál meg. Ellenőrizd le a jelszavad, majd próbálkozz újra. Ha továbbra is gondjaid lennének, lépj kapcsolatba a %sfórum adminisztrátorával%s.',
	'LOGIN_ERROR_USERNAME'				=> 'Rossz felhasználónevet adtál meg. Ellenőrizd le a felhasználónevet, majd próbálkozz újra. Ha továbbra is gondjaid lennének, lépj kapcsolatba a %sfórum adminisztrátorával%s.',
	'LOGIN_FORUM'						=> 'A fórum megtekintéséhez vagy a hozzászóláshoz, meg kell adnod a jelszavát.', //?
	'LOGIN_INFO'						=> 'A belépéshez regisztrált felhasználónak kell lenned. A regisztráció csupán néhány másodpercet vesz igénybe, de számos előnnyel jár. Az adminisztrátor például így tud külön jogosultságokat adni. A belépés előtt győződj meg róla, hogy elfogadod a felhasználási feltételeinket, valamint egyetértesz az adatvédelmi elveinkkel. Kérjük olvasd el a fórumok szabályzatát is!', //? ensure
	'LOGIN_VIEWFORUM'					=> 'Csak reigsztrált felhasználók tekinthetik meg ezt a fórumot.',
	'LOGIN_EXPLAIN_EDIT'				=> 'Csak reigsztrált felhasználók szerkeszthetik a hozzászólásaikat ebben a fórumban.',
	'LOGOUT'							=> 'Kilépés',
	'LOGOUT_USER'						=> 'Kilépés [ %s ]',
	'LOG_ME_IN'							=> 'Automatikus bejelentkezés',

	'MARK'					=> 'Kijelölés',
	'MARK_ALL'				=> 'Összes kijelölése',
	'MARK_FORUMS_READ'		=> 'Fórumok megjelölése olvasottként',
	'MB'					=> 'MB',
	'MCP'					=> 'Moderátori vezérlőpult',
	'MEMBERLIST'			=> 'Taglista',
	'MEMBERLIST_EXPLAIN'	=> 'Felhasználók listájának megtekintése',
	'MERGE_TOPIC'			=> 'Téma összevonása',
	'MESSAGE'				=> 'Üzenet',
	'MESSAGES'				=> 'üzenet',
	'MESSAGE_BODY'			=> 'Üzenet tartalma',
	'MINUTES'				=> 'perc', //?
	'MODERATE'				=> 'Moderálás',
	'MODERATOR'				=> 'Moderátor',
	'MODERATORS'			=> 'Moderátorok',
	'MONTH'					=> 'hónap', //?
	'MOVE'					=> 'Áthelyezés',
	'MSNM'					=> 'MSNM/WLM',	

	'NA'						=> 'N/A',
	'NEWEST_USER'				=> 'Legújabb regisztrált tagunk: <strong>%s%s%s</strong>',
	'NEW_MESSAGE'				=> 'Új üzenet',
	'NEW_MESSAGES'				=> 'Új üzenetek',
	'NEW_PM'					=> '<strong>%d</strong> új üzenet',
	'NEW_PMS'					=> '<strong>%d</strong> új üzenet',
	'NEW_POST'					=> 'Új hozzászólás',
	'NEW_POSTS'					=> 'Új hozzászólások',
	'NEXT'						=> 'Következő',
	'NEVER'						=> 'Soha',
	'NO'						=> 'Nem',
	'NOT_ALLOWED_MANAGE_GROUP'	=> 'Nincs jogosultságod a csoport adminisztrátori vezérlőpultról való kezeléséhez.', //?
	'NOT_AUTHORIZED'			=> 'Nincs jogosultságod ezen terület eléréséhez.', //?
	'NOT_WATCHING_FORUM'		=> 'Sikeresen leiratkoztál a fórumról.',
	'NOT_WATCHING_TOPIC'		=> 'Sikeresen leiratkoztál a témáról.',
	'NO_ACCESS_ATTACHMENT'		=> 'Nincs jogosultságod hozzáférni ehhez az állományhoz.',
	'NO_ACTION'					=> 'Nincs semmilyen teendő.', //?
	'NO_ADMINISTRATORS'			=> 'A fórumnak nincs adminisztrátora.',
	'NO_AUTH_ADMIN'				=> 'Nincsenek adminisztrátori jogosultságaid, ezért nem férhetsz hozzá az adminisztrátori vezérlőpulthoz.',
	'NO_AUTH_ADMIN_USER_DIFFER'	=> 'Nem azonosíthatod magad egy másik felhasználóként.',
	'NO_AUTH_OPERATION'			=> 'Nincs meg a megfelelő jogosultságod ezen művelet elvégzéséhez.',
	'NO_CONNECT_TO_SMTP_HOST'	=> 'Nem sikerült csatlakozni az SMTP szerverhez: %s : %s',
	'NO_BIRTHDAYS'				=> 'Ma senkinek sincs születésnapja.', //? Ma senki sem ünnepli a születésnapját
	'NO_EMAIL_MESSAGE'			=> 'Az e-mail üzenet üres.',
	'NO_EMAIL_RESPONSE_CODE'	=> 'Nem jött válasz a e-mail szervertől.', //? 'Nem sikerült lekérdezni az e-mail kiszolgáló visszaigazoló kódjait.!
	'NO_EMAIL_SUBJECT'			=> 'Nem adtad meg az e-mail témáját.',
	'NO_FORUM'					=> 'A kiválasztott fórum nem létezik.',
	'NO_FORUMS'					=> 'Nincsenek fórumok.', //?
	'NO_GROUP'					=> 'A keresett csoport nem létezik.',
	'NO_GROUP_MEMBERS'			=> 'A csoportnak jelenleg nincsenek tagjai.',
	'NO_IPS_DEFINED'			=> 'Nincs ilyen IP-cím vagy hoszt.', //? (pl. acp - secure attachments)
	'NO_MEMBERS'				=> 'Nincs a keresési feltételeknek megfelelő felahsználó.',
	'NO_MESSAGES'				=> 'Nincsenek üzenetek.',
	'NO_MODE'					=> 'Nem adtál meg módot.', //?!
	'NO_MODERATORS'				=> 'A fórumnak nincsenek moderátorai.',
	'NO_NEW_MESSAGES'			=> 'Nincs új üzenet.',
	'NO_NEW_PM'					=> '<strong>0</strong> új üzenet',
	'NO_NEW_POSTS'				=> 'Nincsenek új hozzászólások',
	'NO_ONLINE_USERS'			=> 'nincs regisztrált felhasználó', //? regisztrált felhasználó vs regisztrált
	'NO_POSTS'					=> 'Nincsenek hozzászólások', //? a . nem kell (pl. főoldal -> utolsó hozzászólás)
	'NO_POSTS_TIME_FRAME'		=> 'Nincsenek a kiválasztott időtartamon belüli hozzászólások a témában.',
	'NO_SUCH_SEARCH_MODULE'		=> 'A megadott keresési mechanizmus nem létezik.', //? "The specified search backend doesn’t exist" - Nem tudom mit jelent - csupán megérzésből írtam valamit :)
	'NO_SUPPORTED_AUTH_METHODS'	=> 'Nincsen támogatott azonosítási eljárás.', //?
	'NO_TOPIC'					=> 'A keresett téma nem létezik.',
	'NO_TOPICS'					=> 'A fórum nem tartalmaz témákat, illetve hozzászólásokat.',
	'NO_TOPICS_TIME_FRAME'		=> 'A fórum nem tartalmaz témákat a megadott időtartamon belül.',
	'NO_UNREAD_PM'				=> '<strong>0</strong> olvasatlan üzenet',
	'NO_UPLOAD_FORM_FOUND'		=> 'Kezdeményeztél egy feltöltést, azonban erre most nincs lehetőség.', //?! "Upload initiated but no valid file upload form found "
	'NO_USER'					=> 'A keresett felhasználó nem létezik.',
	'NO_USERS'					=> 'A keresett felhasználók nem léteznek.',
	'NO_USER_SPECIFIED'			=> 'Nem adtál meg felhasználónevet.', //?

	'OCCUPATION'				=> 'Foglalkozás',
	'OFFLINE'					=> 'Offline',
	'ONLINE'					=> 'Online',
	'ONLINE_BUDDIES'			=> 'Jelenlévő barátok',
	'ONLINE_USERS_TOTAL'		=> 'Jelenleg <strong>%d</strong> felhasználó van jelen: ',
	'ONLINE_USERS_ZERO_TOTAL'	=> 'Jelenleg <strong>0</strong> felhasználó van jelen: ',
	'ONLINE_USER_TOTAL'			=> 'Jelenleg <strong>%d</strong> felhasználó van jelen: ',
	'OPTIONS'					=> 'Opciók', //? Valahol teendőt is jelent (pl. konvertáló), nincs jobb ötletem... :( (lehetőségek)

	'PAGE_OF'				=> 'Oldal: <strong>%1$d</strong> / <strong>%2$d</strong>',
	'PASSWORD'				=> 'Jelszó',
	'PLAY_QUICKTIME_FILE'	=> 'Quicktime állomány lejátszása',
	'PM'					=> 'PÜ',
	'POSTING_MESSAGE'		=> 'Üzenet küldése a %s fórumban',
	'POSTING_PRIVATE_MESSAGE'	=> 'Privát üzenet küldése',
	'POST'					=> 'Hozzászólás',
	'POST_ANNOUNCEMENT'		=> 'Közlemény',
	'POST_STICKY'			=> 'Kiemelt',
	'POSTED'				=> 'Elküldve',
	'POSTED_IN_FORUM'		=> 'Fórum:',
	'POSTED_ON_DATE'		=> 'Dátum:', //? "on"
	'POSTS'					=> 'Hozzászólások',
	'POSTS_UNAPPROVED'		=> 'Jóváhagyatlan hozzászólás(ok)', //? tartalmaz / más? 'A témában jóváhagyatlan hozzászólás(ok) van(nak).'
	'POST_BY_AUTHOR'		=> 'Szerző:',
	'POST_BY_FOE'			=> 'Ezt a hozzászólást <strong>%1$s</strong> küldte, aki jelenleg a tiltólistádon van. %2$sHozzászólás megjelenítése%3$s',
	'POST_DAY'				=> 'Naponta %.2f hozzászólás',
	'POST_DETAILS'			=> 'Hozzászólás adatai',
	'POST_NEW_TOPIC'		=> 'Új téma nyitása',
	'POST_PCT'				=> 'Az összes hozzászólás %.2f%%-a',
	'POST_PCT_ACTIVE'		=> 'A felhasználó hozzászólásainak %.2f%%-a',
	'POST_PCT_ACTIVE_OWN'	=> 'A hozzászólásaid %.2f%%-a',
	'POST_REPORTED'			=> 'Kattints ide a jelentés megtekintéséhez',
	'POST_SUBJECT'			=> 'Hozzászólás témája',
	'POST_TIME'				=> 'Elküldés ideje',
	'POST_UNAPPROVED'		=> 'A hozzászólás jóváhagyásra vár.',
	'PREVIEW'				=> 'Előnézet',
	'PREVIOUS'				=> 'Előző',
	'PRIVACY'				=> 'Adatvédelmi nyilatkozat',
	'PRIVATE_MESSAGE'		=> 'Privát üzenet',
	'PRIVATE_MESSAGES'		=> 'Privát üzenetek',
	'PRIVATE_MESSAGING'		=> 'Privát üzenetek', //? "Private messaging" - hol van használva
	'PROFILE'				=> 'Felhasználói vezérlőpult',

	'READING_FORUM'				=> '%s fórum megtekintése',
	'READING_GLOBAL_ANNOUNCE'	=> 'Általános közlemény megtekintése',
	'READING_LINK'				=> 'Link megtekintése: %s', //? követése?
	'READING_TOPIC'				=> 'Téma megtekintése a %s fórumban',
	'READ_PROFILE'				=> 'Profil',
	'REASON'					=> 'Ok',
	'RECORD_ONLINE_USERS'		=> 'A legtöbb felhasználó (<strong>%1$s</strong> fő) %2$s-kor tartózkodott itt.',
	'REDIRECT'					=> 'Átirányítás',
	'REDIRECTS'					=> 'Átirányítások száma',
	'REGISTER'					=> 'Regisztráció',
	'REGISTERED_USERS'			=> 'Regisztrált felhasználók:',
	'REG_USERS_ONLINE'			=> '%d regisztrált és ',
	'REG_USERS_TOTAL'			=> '%d regisztrált, ',
	'REG_USERS_ZERO_ONLINE'		=> '0 regisztrált és ',
	'REG_USERS_ZERO_TOTAL'		=> '0 regisztrált, ',
	'REG_USER_ONLINE'			=> '%d regisztrált és ',
	'REG_USER_TOTAL'			=> '%d regisztrált, ',
	'REMOVE'					=> 'Törlés',
	'REMOVE_INSTALL'			=> 'Kérjük töröld, helyezd át, vagy nevezd át az install könyvtárat a fórum használatba vétele előtt. Csak az adminisztrátori vezérlőpult lesz elérhető, amíg ez a könyvtár létezik.',
	'REPLIES'					=> 'Válaszok',
	'REPLY_WITH_QUOTE'			=> 'Hozzászólás az előzmény idézésével',
	'REPLYING_GLOBAL_ANNOUNCE'	=> 'Válasz írása egy általános közleményre',
	'REPLYING_MESSAGE'			=> 'Válasz írása a %s fórumban',
	'REPORT_BY'					=> 'Jelentés küldője', //? Hol használják?
	'REPORT_POST'				=> 'Hozzászólás jelentése',
	'REPORTING_POST'			=> 'Hozzászólás jelentése',
	'RESEND_ACTIVATION'			=> 'Aktivációs e-mail újraküldése',
	'RESET'						=> 'Töröl',
	'RESTORE_PERMISSIONS'		=> 'Jogosultságok visszaállítása',
	'RETURN_INDEX'				=> '%sVissza a fórum kezdőlapra%s',
	'RETURN_FORUM'				=> '%sVissza a legutóbb látogatott fórumhoz %s', //?? "Return to the forum last visited" Vissza a legutóbb meglátogatott fórumhoz??
	'RETURN_PAGE'				=> '%sVissza az előző oldalra%s',
	'RETURN_TOPIC'				=> '%sVissza a legutóbb látogatott témához%s',
	'RETURN_TO'					=> 'Vissza:', //? "Return to"
	//? Az "ebben a fórumban" helyett nem kéne inkább az állítmánynak megfelelően ragozni ezt?
	'RULES_ATTACH_CAN'			=> '<strong>Küldhetsz</strong> csatolmányokat ebben a fórumban.', //?
	'RULES_ATTACH_CANNOT'		=> '<strong>Nem</strong> küldhetsz csatolmányokat ebben a fórumban.', //?
	'RULES_DELETE_CAN'			=> '<strong>Törölheted</strong> a hozzászólásaid ebben a fórumban.', //? a?
	'RULES_DELETE_CANNOT'		=> '<strong>Nem</strong> törölheted a hozzászólásaid ebben a fórumban.',
	'RULES_DOWNLOAD_CAN'		=> '<strong>Letöltheted</strong> a csatolmányokat ebben a fórumban.',
	'RULES_DOWNLOAD_CANNOT'		=> '<strong>Nem</strong> töltheted le a csatolmányokat ebben a fórumban.',
	'RULES_EDIT_CAN'			=> '<strong>Szerkesztheted</strong> a hozzászólásaid ebben a fórumban.',
	'RULES_EDIT_CANNOT'			=> '<strong>Nem</strong> szerkesztheted a hozzászólásaid ebben a fórumban.',
	'RULES_LOCK_CAN'			=> '<strong>Lezárhatod</strong> a témáid ebben a fórumban.',
	'RULES_LOCK_CANNOT'			=> '<strong>Nem</strong> zárhatod le a témáid ebben a fórumban.',
	'RULES_POST_CAN'			=> '<strong>Nyithatsz</strong> új témákat ebben a fórumban.', //? Nyithatsz vs készíthetsz (máshol is)
	'RULES_POST_CANNOT'			=> '<strong>Nem</strong> nyithatsz témákat ebben a fórumban.',
	'RULES_REPLY_CAN'			=> '<strong>Válaszolhatsz</strong> egy témára ebben a fórumban.', //? Küldhetsz hozzászólásokat?
	'RULES_REPLY_CANNOT'		=> '<strong>Nem</strong> válaszolhatsz egy témára ebben a fórumban.',
	'RULES_VOTE_CAN'			=> '<strong>Szavazhatsz</strong> ebben a fórumban.',
	'RULES_VOTE_CANNOT'			=> '<strong>Nem</strong> szavazhatsz ebben a fórumban.',

	'SEARCH'					=> 'Keresés',
	'SEARCH_MINI'				=> 'Keresés…',
	'SEARCH_ADV'				=> 'Részletes keresés', //? Speciális (~Google)?
	'SEARCH_ADV_EXPLAIN'		=> 'Részletes keresés beállításainak megtekintése', //?
	'SEARCH_KEYWORDS'			=> 'Kulcsszavak', //? Jobb, mint a keresés kulcsszavakra, nem?
	'SEARCHING_FORUMS'			=> 'Fórumok keresése',
	'SEARCH_ACTIVE_TOPICS'		=> 'Aktív témák megtekintése',
	'SEARCH_FOR'				=> 'Keresés',
	'SEARCH_FORUM'				=> 'Keresés a fórumban…', //? "Search this forum…" - mellesleg hol használják?
	'SEARCH_NEW'				=> 'Új hozzászólások megtekintése',
	'SEARCH_POSTS_BY'			=> 'Hozzászólások keresése:', //??
	'SEARCH_SELF'				=> 'Saját hozzászólások megtekintése',
	'SEARCH_TOPIC'				=> 'Keresés a témában…',
	'SEARCH_UNANSWERED'			=> 'Megválaszolatlan hozzászólások megtekintése',
	'SECONDS'					=> 'másodperc',
	'SELECT'					=> 'Kiválasztás',
	'SELECT_DESTINATION_FORUM'	=> 'Adj meg egy célfórumot.',
	'SELECT_FORUM'				=> 'Fórum kiválasztása',
	'SEND_EMAIL'				=> 'E-mail küldése',
	'SEND_PRIVATE_MESSAGE'		=> 'Privát üzenet küldése',
	'SETTINGS'					=> 'Beállítások', //? Options = Settings ??
	'SIGNATURE'					=> 'Aláírás',
	'SKIP'						=> 'Ugrás a tartalomhoz',
	'SMTP_NO_AUTH_SUPPORT'		=> 'Az SMTP szerver nem támogatja az azonosítás funkciót.',
	'SORRY_AUTH_READ'			=> 'Nincs jogosultságod a fórum megtekintéséhez.', //? ragozás (+ másikkal összhangban legyen!)
	'SORRY_AUTH_VIEW_ATTACH'	=> 'Nincs jogosultságod a csatolmány letöltéséhez.',
	'SORT_BY'					=> 'Rendezés',
	'SORT_JOINED'				=> 'Csatlakozás dátuma',
	'SORT_LOCATION'				=> 'Tartózkodási hely',
	'SORT_RANK'					=> 'Rang',
	'SORT_TOPIC_TITLE'			=> 'Téma címe',
	'SORT_USERNAME'				=> 'Felhasználónév',
	'SPLIT_TOPIC'				=> 'Téma szétválasztása',
	'SQL_ERROR_OCCURRED'		=> 'SQL hiba lépett fel az oldal generálása közben. Ha a probléma továbbra is fennálna, lépj kapcsolatba a %sfórum adminisztrátorával%s.', //? készítése? (magyarosabb, de furább)
	'STATISTICS'				=> 'Statisztika',
	'START_WATCHING_FORUM'		=> 'Feliratkozás', //? 'Feliratkozás a fórumra'
	'START_WATCHING_TOPIC'		=> 'Feliratkozás', //? 'Feliratkozás a témára'
	'STOP_WATCHING_FORUM'		=> 'Leiratkozás', //? 'Leiratkozás a fórumról'
	'STOP_WATCHING_TOPIC'		=> 'Leiratkozás', //? 'Leiratkozás a témáról'
	'SUBFORUM'					=> 'Alfórum',
	'SUBFORUMS'					=> 'Alfórumok',
	'SUBJECT'					=> 'Téma',
	'SUBMIT'					=> 'Elküld',

	'TERMS_USE'			=> 'Felhasználási feltételek',
	'TEST_CONNECTION'	=> 'Kapcsolat ellenőrzése', //? tesztelése, próba?
	'THE_TEAM'			=> 'A csapat', //? valami jó kis kifejezés kéne... - fenntartók, vezetők stb.
	'TIME'				=> 'Idő', //?

	'TOO_LONG_AIM'					=> 'A megadott AIM azonosító túl hosszú.',
	'TOO_LONG_CONFIRM_CODE'			=> 'A megadott megerősítő kód túl hosszú.',
	'TOO_LONG_ICQ'					=> 'A megadott ICQ azonosító túl hosszú.',
	'TOO_LONG_INTERESTS'			=> 'A megadott érdeklődési kör túl hosszú.',
	'TOO_LONG_JABBER'				=> 'A megadott Jabber azonosító túl hosszú.',
	'TOO_LONG_LOCATION'				=> 'A megadott tartózkodási hely túl hosszú.',
	'TOO_LONG_MSN'					=> 'A megadott MSNM/WLM azonosító túl hosszú.',
	'TOO_LONG_NEW_PASSWORD'			=> 'A megadott jelszó túl hosszú.',
	'TOO_LONG_OCCUPATION'			=> 'A megadott foglalkozás túl hosszú.',
	'TOO_LONG_PASSWORD_CONFIRM'		=> 'A megadott jelszó megerősítés túl hosszú.',
	'TOO_LONG_USER_PASSWORD'		=> 'A megadott jelszó túl hosszú.',
	'TOO_LONG_USERNAME'				=> 'A megadott felhasználónév túl hosszú.',
	'TOO_LONG_EMAIL'				=> 'A megadott e-mail cím túl hosszú.',
	'TOO_LONG_EMAIL_CONFIRM'		=> 'A megadott e-mail cím megerősítés túl hosszú.',
	'TOO_LONG_WEBSITE'				=> 'A megadott honlap cím túl hosszú.',
	'TOO_LONG_YIM'					=> 'A megadott Yahoo! Messenger azonosító túl hosszú.',

	'TOO_MANY_VOTE_OPTIONS'			=> 'Túl sok lehetőségre próbáltál meg szavazni.', //? Szimplán szavaztál?

	'TOO_SHORT_AIM'					=> 'A megadott AIM azonosító túl rövid.',
	'TOO_SHORT_CONFIRM_CODE'		=> 'A megadott megerősítő kód túl rövid.',
	'TOO_SHORT_ICQ'					=> 'A megadott ICQ azonosító túl rövid.',
	'TOO_SHORT_INTERESTS'			=> 'A megadott érdeklődési kör túl rövid.',
	'TOO_SHORT_JABBER'				=> 'A megadott Jabber azonosító túl rövid.',
	'TOO_SHORT_LOCATION'			=> 'A megadott tartózkodási hely túl rövid.',
	'TOO_SHORT_MSN'					=> 'A megadott MSNM/WLM azonosító túl rövid.',
	'TOO_SHORT_NEW_PASSWORD'		=> 'A megadott jelszó túl rövid.',
	'TOO_SHORT_OCCUPATION'			=> 'A megadott foglalkozás túl rövid.',
	'TOO_SHORT_PASSWORD_CONFIRM'	=> 'A megadott jelszó megerősítés túl rövid.',
	'TOO_SHORT_USER_PASSWORD'		=> 'A megadott jelszó túl rövid.',
	'TOO_SHORT_USERNAME'			=> 'A megadott felhasználónév túl rövid.',
	'TOO_SHORT_EMAIL'				=> 'A megadott e-mail cím túl rövid.',
	'TOO_SHORT_EMAIL_CONFIRM'		=> 'A megadott e-mail cím megerősítés túl rövid.',
	'TOO_SHORT_WEBSITE'				=> 'A megadott honlap cím túl rövid.',
	'TOO_SHORT_YIM'					=> 'A megadott Yahoo! Messenger azonosító túl rövid.',

	'TOPIC'				=> 'Téma',
	'TOPICS'			=> 'Témák',
	'TOPIC_ICON'		=> 'Téma ikon',
	'TOPIC_LOCKED'		=> 'A témát lezárták, nem szerkesztheted a hozzászólásaid, és nem küldhetsz új hozzászólást.', //? passzívot kéne használni?
	'TOPIC_MOVED'		=> 'Áthelyezett téma',
	'TOPIC_REVIEW'		=> 'Téma áttekintése', //? Na, erre is jöhetne egy jobb kifejezés...
	'TOPIC_TITLE'		=> 'Téma címe',
	'TOPIC_UNAPPROVED'	=> 'Jóváhagyatlan téma', // passzív, vagy még beszúrása?
	'TOTAL_ATTACHMENTS'	=> 'Csatolmány(ok)',
	'TOTAL_LOG'			=> '1 bejegyzés',
	'TOTAL_LOGS'		=> '%d bejegyzés',
	'TOTAL_NO_PM'		=> 'Összesen 0 privát üzenet', //? - hol használják??
	'TOTAL_PM'			=> 'Összesen 1 privát üzenet',
	'TOTAL_PMS'			=> 'Összesen $d privát üzenet',
	'TOTAL_POSTS'		=> 'Hozzászólások száma',
	'TOTAL_POSTS_OTHER'	=> 'Hozzászólások száma: <strong>%d</strong>', //?
	'TOTAL_POSTS_ZERO'	=> 'Hozzászólások száma <strong>0</strong>', //?
	'TOPIC_REPORTED'	=> 'Jelentett téma', //? 'A témát jelentették.'
	'TOTAL_TOPICS_OTHER'=> 'Témák száma: <strong>%d</strong>',
	'TOTAL_TOPICS_ZERO'	=> 'Témák száma: <strong>0</strong>',
	'TOTAL_USERS_OTHER'	=> 'Felhasználók száma: <strong>%d</strong>',
	'TOTAL_USERS_ZERO'	=> 'Felhasználók száma: <strong>0</strong>',
	'TRACKED_PHP_ERROR'	=> 'Feljegyzett PHP hibák: %s', //? szvsz elég jó fordítás, bár ki tudja milyen szövegkörnyezetben van...

	'UNABLE_GET_IMAGE_SIZE'	=> 'Nem sikerült hozzáférni a képhez, vagy az állomány valójában nem kép.',
	'UNABLE_TO_DELIVER_FILE'=> 'Nem sikerült kézbesíteni az állományt.', //? hol használhatják??
	'UNKNOWN_BROWSER'		=> 'Ismeretlen böngésző',
	'UNMARK_ALL'			=> 'Összes kijelölésének megszüntetése',
	'UNREAD_MESSAGES'		=> 'Olvasatlan üzenetek',
	'UNREAD_PM'				=> '<strong>%d</strong> olvasatlan üzenet',
	'UNREAD_PMS'			=> '<strong>%d</strong> olvasatlan üzenet',
	'UNWATCHED_FORUMS'		=> 'Sikeresen leiratkoztál a kiválasztott fórumokról.', //? kiválasztott? (selected - de a magyarban más jobban illene ide...)
	'UNWATCHED_TOPICS'		=> 'Sikeresen leiratkoztál a kiválasztott témákról.', //? kiválasztott?
	'UPDATE'				=> 'Frissítés',
	'UPLOAD_IN_PROGRESS'	=> 'Feltöltés folyamatban...',
	'URL_REDIRECT'			=> 'Ha a böngésződ nem támogatja a meta átirányítást, kattints %side%s.',
	'USERGROUPS'			=> 'Csoportok',
	'USERNAME'				=> 'Felhasználónév',
	'USERNAMES'				=> 'Felhasználónevek',
	'USER_AVATAR'			=> 'Avatar',
	'USER_CANNOT_READ'		=> 'Nincs jogosultságod a hozzászólások megtekintéséhez ebben a fórumban.',
	'USER_POST'				=> '%d hozzászólás',
	'USER_POSTS'			=> '%d hozzászólás',
	'USERS'					=> 'Felhasználók', //? n felhasználók?
	'USE_PERMISSIONS'		=> 'Felhasználó jogosultságainak kipróbálása', //? "Test out user’s permissions"

	'VIEWED'					=> 'Megtekintve',
	'VIEWING_FAQ'				=> 'Gy.i.k. megtekintése',
	'VIEWING_MEMBERS'			=> 'Taglista megtekintése',
	'VIEWING_ONLINE'			=> 'Jelenlévők listájának megtekintése',
	'VIEWING_MCP'				=> 'Moderátori vezérlőpult megtekintése',
	'VIEWING_PRIVATE_MESSAGES'	=> 'Privát üzenetek megtekintése',
	'VIEWING_REGISTER'			=> 'Regisztrálás a fórumra',
	'VIEWING_MEMBER_PROFILE'	=> 'Felhasználó profiljának megtekintése',
	'VIEWING_UCP'				=> 'Felhasználói vezérlőpult megtekintése',
	'VIEWS'						=> 'Megtekintve', //?
	'VIEW_BOOKMARKS'			=> 'Kedvencek megtekintése', //? Kell a megtekintés (túl hosszú...)?
	'VIEW_FORUM_LOGS'			=> 'Napló megtekintése', //? Kell a megtekintés (túl hosszú...)?
	'VIEW_LATEST_POST'			=> 'Utolsó hozzászólás megtekintése', //? Kell a megtekintés (túl hosszú...)?
	'VIEW_NEWEST_POST'			=> 'Első olvasatlan hozzászólás megtekintése', //? Kell a megtekintés (túl hosszú...)?
	'VIEW_NOTES'				=> 'Feljegyzések megtekintése', //? Kell a megtekintés (túl hosszú...)? felhasználói kell? feljegyzés jó szó?
	'VIEW_ONLINE_TIME'			=> 'A fenti adatok az elmúlt %d perc alapján készültek.',
	'VIEW_ONLINE_TIMES'			=> 'A fenti adatok az elmúlt %d perc alapján készültek.',
	'VIEW_TOPIC'				=> 'Téma megtekintése',
	'VIEW_TOPIC_ANNOUNCEMENT'	=> 'Közlemény: ',
	'VIEW_TOPIC_GLOBAL'			=> 'Általános közlemény: ',
	'VIEW_TOPIC_LOCKED'			=> 'Lezárva: ',
	'VIEW_TOPIC_LOGS'			=> 'Napló megtekintése',
	'VIEW_TOPIC_MOVED'			=> 'Áthelyezve: ',
	'VIEW_TOPIC_POLL'			=> 'Szavazás: ',
	'VIEW_TOPIC_STICKY'			=> 'Kiemelt: ',
	'VISIT_WEBSITE'				=> 'Honlap meglátogatása',

	'WARNINGS'			=> 'Figyelmeztetések',
	'WARN_USER'			=> 'Felhasználó figyelmeztetése', //? figyelmeztetése elég lenne - túl hosszú...
	'WELCOME_SUBJECT'	=> 'Üdvözlünk a %s fórumán!', //??
	'WEBSITE'			=> 'Honlap',
	'WHOIS'				=> 'IP adatok', //? maradhatna whois, jó ez?
	'WHO_IS_ONLINE'		=> 'Ki van itt', //? Jelenlévő felhasználók jobb lenne?
	'WRONG_PASSWORD'	=> 'Hibás jelszót adtál meg.',

	'WRONG_DATA_ICQ'			=> 'A megadott ICQ szám hibás.', //? ICQ szám...
	'WRONG_DATA_JABBER'			=> 'A megadott Jabber felhasználói azonosító hibás.',
	'WRONG_DATA_LANG'			=> 'A megadott nyelv hibás.',
	'WRONG_DATA_WEBSITE'		=> 'A honlap címének egy rendes URL-nek kell lennie (a protokollal együtt). Például: http://www.pelda.hu/.', //?

	'YEAR'				=> 'év', //?
	'YES'				=> 'Igen',
	'YIM'				=> 'YIM',	
	'YOU_LAST_VISIT'	=> 'Legutolsó látogatás: %s',
	'YOU_NEW_PM'		=> 'Új privát üzeneted érkezett.', //? "A new private message is waiting for you in your Inbox" az érkezett fiókba...
	'YOU_NEW_PMS'		=> 'Új privát üzeneteid érkeztek.',
	'YOU_NO_NEW_PM'		=> 'Nincs új privát üzeneted.',

	'datetime'			=> array(
		'TODAY'		=> 'Ma, ',
		'TOMORROW'	=> 'Holnap, ',
		'YESTERDAY'	=> 'Tegnap, ',

		'Sunday'	=> 'vasárnap',
		'Monday'	=> 'hétfő',
		'Tuesday'	=> 'kedd',
		'Wednesday'	=> 'szerda',
		'Thursday'	=> 'csütörtök',
		'Friday'	=> 'péntek',
		'Saturday'	=> 'szombat',

		'Sun'		=> 'vas.',
		'Mon'		=> 'hétf.',
		'Tue'		=> 'kedd',
		'Wed'		=> 'szer.',
		'Thu'		=> 'csüt.',
		'Fri'		=> 'pén.',
		'Sat'		=> 'szomb.',

		'January'	=> 'január',
		'February'	=> 'február',
		'March'		=> 'március',
		'April'		=> 'április',
		'May'		=> 'május',
		'June'		=> 'június',
		'July'		=> 'július',
		'August'	=> 'augusztus',
		'September' => 'szeptember',
		'October'	=> 'október',
		'November'	=> 'november',
		'December'	=> 'december',

		'Jan'		=> 'jan.',
		'Feb'		=> 'feb.',
		'Mar'		=> 'márc.',
		'Apr'		=> 'ápr.',
		'May_short'	=> 'máj.',	// Short representation of "May". May_short used because in english the short and long date are the same for May.
		'Jun'		=> 'jún.',
		'Jul'		=> 'júl.',
		'Aug'		=> 'aug.',
		'Sep'		=> 'szept.',
		'Oct'		=> 'okt.',
		'Nov'		=> 'nov.',
		'Dec'		=> 'dec.',
	),

	'tz'				=> array(
		'-12'	=> 'UTC - 12 óra',
		'-11'	=> 'UTC - 11 óra',
		'-10'	=> 'UTC - 10 óra',
		'-9.5'	=> 'UTC - 9,5 óra',
		'-9'	=> 'UTC - 9 óra',
		'-8'	=> 'UTC - 8 óra',
		'-7'	=> 'UTC - 7 óra',
		'-6'	=> 'UTC - 6 óra',
		'-5'	=> 'UTC - 5 óra',
		'-4'	=> 'UTC - 4 óra',
		'-3.5'	=> 'UTC - 3,5 óra',
		'-3'	=> 'UTC - 3 óra',
		'-2'	=> 'UTC - 2 óra',
		'-1'	=> 'UTC - 1 óra',
		'0'		=> 'UTC',
		'1'		=> 'UTC + 1 óra',
		'2'		=> 'UTC + 2 óra',
		'3'		=> 'UTC + 3 óra',
		'3.5'	=> 'UTC + 3,5 óra',
		'4'		=> 'UTC + 4 óra',
		'4.5'	=> 'UTC + 4,5 óra',
		'5'		=> 'UTC + 5 óra',
		'5.5'	=> 'UTC + 5,5 óra',
		'5.75'	=> 'UTC + 5,75 óra',
		'6'		=> 'UTC + 6 óra',
		'6.5'	=> 'UTC + 6,5 óra',
		'7'		=> 'UTC + 7 óra',
		'8'		=> 'UTC + 8 óra',
		'8.75'	=> 'UTC + 8,75 óra',
		'9'		=> 'UTC + 9 óra',
		'9.5'	=> 'UTC + 9,5 óra',
		'10'	=> 'UTC + 10 óra',
		'10.5'	=> 'UTC + 10:30 óra',
		'11'	=> 'UTC + 11 óra',
		'11.5'	=> 'UTC + 11:30 óra',
		'12'	=> 'UTC + 12 óra',
		'12.75'	=> 'UTC + 12,75 óra',
		'13'	=> 'UTC + 13 óra',
		'14'	=> 'UTC + 14 óra',
		'dst'	=> '[ NyI ]', //? (nyári időszámítás)
	),

	'tz_zones'	=> array(
		'-12'	=> '[UTC - 12] Baker-szigeti idő',
		'-11'	=> '[UTC - 11] niue-i idő, szamoai zónaidő',
		'-10'	=> '[UTC - 10] hawaii-aleuti zónaidő, Cook-szigeteki idő',
		'-9.5'	=> '[UTC - 9,5] Marquise-szigeteki idő', //? (egyébként a franciából vettem, mert az az eredeti latin)
		'-9'	=> '[UTC - 9] alaszkai zónaidő, Gambier-szigeteki idő',
		'-8'	=> '[UTC - 8] csendes-óceáni zónaidő',
		'-7'	=> '[UTC - 7] sziklás-hegységi zónaidő',
		'-6'	=> '[UTC - 6] közép zónaidő', //? ez aztán nem könnyű...
		'-5'	=> '[UTC - 5] keleti zónaidő',
		'-4'	=> '[UTC - 4] atlanti zónaidő', //? ez is egy kicsit fura
		'-3.5'	=> '[UTC - 3,5] newfoundlandi zónaidő',
		'-3'	=> '[UTC - 3] amazoni zónaidő, közép-grönlandi idő',
		'-2'	=> '[UTC - 2] Fernando de Noronha-i, dél-georgiai és dél-szendvics-szigeteki idő',
		'-1'	=> '[UTC - 1] azori-szigeteki zónaidő, zöld-foki-szigeteki idő, kelet-grönlandi idő', //? Azores magyar kiejtése
		'0'		=> '[UTC] nyugat-európai idő, greenwichi középidő',
		'1'		=> '[UTC + 1] közép-európai idő, nyugat-afrikai idő',
		'2'		=> '[UTC + 2] kelet-európai idő, közép-afrikai idő',
		'3'		=> '[UTC + 3] moszkvai zónaidő, kelet-afrikai idő',
		'3.5'	=> '[UTC + 3,5] iráni zónaidő',
		'4'		=> '[UTC + 4] gulfi zónaidő, szamarai zónaidő', //? s?
		'4.5'	=> '[UTC + 4:30] afganisztáni idő',
		'5'		=> '[UTC + 5] pakisztáni zónaidő, yekaterinburgi zónaidő',
		'5.5'	=> '[UTC + 5,5] indiai zónaidő, Sri Lanka-i idő',
		'5.75'	=> '[UTC + 5,75] nepáli idő',
		'6'		=> '[UTC + 6] bangladesi idő, bhutani idő, novoszibirszk zónaidő',
		'6.5'	=> '[UTC + 6,5] kókusz-szigeteki idő, myanmari idő',
		'7'		=> '[UTC + 7] indokínai idő, krasznojarszki zónaidő',
		'8'		=> '[UTC + 8] kínai zónaidő, nyugat-ausztráliai zónaidő, irkutszki zónaidő',
		'8.75'	=> '[UTC + 8,75] délkelet-nyugat-ausztráliai zónaidő', //? - ez meg mi??
		'9'		=> '[UTC + 9] japán zónaidő, koreai zónaidő, csitai zónaidő',
		'9.5'	=> '[UTC + 9,5] közép-ausztráliai zónaidő', //? ausztráliai központi zónaidő??
		'10'	=> '[UTC + 10] kelet-ausztráliai zónaidő, vlagyivosztoki zónaidő',
		'10.5'	=> '[UTC + 10,5] Lord Howe-i zónaidő',
		'11'	=> '[UTC + 11] Salamon-szigeteki idő, magadáni zónaidő',
		'11.5'	=> '[UTC + 11,5] Norfolk-szigeti idő',
		'12'	=> '[UTC + 12] új-zélandi idő, Fidzsi-szigeteki idő, kamcsatkai zónaidő',
		'12.75'	=> '[UTC + 12,75] Chatham-szigeteki idő',
		'13'	=> '[UTC + 13] tongai idő, Phoenix-szigeteki idő',
		'14'	=> '[UTC + 14] Line-szigeti idő',
	),

	// The value is only an example and will get replaced by the current time on view
	'dateformats'	=> array(
		'|Y.m.d.| H:i'			=> '2007.01.01. 13:37 [Relatív napok]',
		'Y.m.d. H:i'			=> '2007.01.01. 13:37',
		'|Y.m.d., D| H:i'		=> '2007.01.01. szer., 13:37 [Relatív napok]',
		'|Y. M j.| G:i'			=> '2007. jan. 1. 13:37 [Relatív napok]',
		'|Y. F j.| G:i'			=> '2007. január 1. 13:37 [Relatív napok]',
		'|Y. M j., D| G:i'		=> '2007. jan. 1., szer. 13:37 [Relatív napok]',
		'|Y. F j., l| G:i'		=> '2007. január 1., szerda 13:37 [Relatív napok]',
	),

	// The default dateformat which will be used on new installs in this language
	// Translators should change this if a the usual date format is different
	'default_dateformat'	=> '|Y.m.d.| H:i',

));

?>
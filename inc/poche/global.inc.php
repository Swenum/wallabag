<?php
/**
 * wallabag, self hostable application allowing you to not miss any content anymore
 *
 * @category   wallabag
 * @author     Nicolas Lœuillet <nicolas@loeuillet.org>
 * @copyright  2013
 * @license    http://opensource.org/licenses/MIT see COPYING file
 */

# the poche system root directory (/inc)
define('INCLUDES', dirname(__FILE__) . '/..');

# the poche root directory
define('ROOT', INCLUDES . '/..');

require_once INCLUDES . '/poche/Tools.class.php';
require_once INCLUDES . '/poche/User.class.php';
require_once INCLUDES . '/poche/Url.class.php';
require_once INCLUDES . '/3rdparty/class.messages.php';
require_once ROOT . '/vendor/autoload.php';
require_once INCLUDES . '/poche/Template.class.php';
require_once INCLUDES . '/poche/Language.class.php';
require_once INCLUDES . '/poche/Routing.class.php';
require_once INCLUDES . '/poche/WallabagEBooks.class.php';
require_once INCLUDES . '/poche/Poche.class.php';

require_once INCLUDES . '/poche/Database.class.php';
require_once INCLUDES . '/3rdparty/simple_html_dom.php';
require_once INCLUDES . '/3rdparty/paginator.php';
require_once INCLUDES . '/3rdparty/Session.class.php';

require_once INCLUDES . '/3rdparty/libraries/feedwriter/FeedItem.php';
require_once INCLUDES . '/3rdparty/libraries/feedwriter/FeedWriter.php';
require_once INCLUDES . '/3rdparty/FlattrItem.class.php';

require_once INCLUDES . '/3rdparty/htmlpurifier/HTMLPurifier.auto.php';

# epub library
require_once INCLUDES . '/3rdparty/libraries/PHPePub/Logger.php';
require_once INCLUDES . '/3rdparty/libraries/PHPePub/EPub.php';
require_once INCLUDES . '/3rdparty/libraries/PHPePub/EPubChapterSplitter.php';

# mobi library
require_once INCLUDES . '/3rdparty/libraries/send2kindle/send.php';
require_once INCLUDES . '/3rdparty/libraries/send2kindle/images.php';
require_once INCLUDES . '/3rdparty/libraries/send2kindle/storage.php';
require_once INCLUDES . '/3rdparty/libraries/send2kindle/MOBIClass/MOBI.php';
require_once INCLUDES . '/3rdparty/libraries/send2kindle/utils.php';

# pdf library
require_once INCLUDES . '/3rdparty/libraries/mpdf/mpdf.php';

# system configuration; database credentials et caetera
require_once INCLUDES . '/poche/config.inc.php';
require_once INCLUDES . '/poche/config.inc.default.php';

if (DOWNLOAD_PICTURES) {
    require_once  INCLUDES . '/poche/pochePictures.php';
}

if (!ini_get('date.timezone') || !@date_default_timezone_set(ini_get('date.timezone'))) {
    date_default_timezone_set('UTC');
}

if (defined('ERROR_REPORTING')) {
    error_reporting(ERROR_REPORTING);
}

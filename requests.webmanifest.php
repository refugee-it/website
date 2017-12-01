<?php
/* Copyright (C) 2017 Stephan Kreutzer
 *
 * This file is part of refugee-it.de.
 *
 * refugee-it.de is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License version 3 or any later version,
 * as published by the Free Software Foundation.
 *
 * refugee-it.de is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License 3 for more details.
 *
 * You should have received a copy of the GNU Affero General Public License 3
 * along with refugee-it.de. If not, see <http://www.gnu.org/licenses/>.
 */

require_once(dirname(__FILE__)."/libraries/languagelib.inc.php");
require_once(getLanguageFile("requests.webmanifest"));

echo "{".
       "\"name\": \"refugee-it.de: ".LANG_NAME."\",".
       "\"short_name\": \"RfgIt".LANG_SHORTNAME."\",".
       "\"start_url\": \"./requests.php?lang=".getCurrentLanguage()."\",".
       "\"scope\": \"./requests.php\",".
       // "standalone" just because Google doesn't support "browser".
       "\"display\": \"standalone\",".
       "\"background_color\": \"#FFE9C5\",".
       "\"description\": \"refugee-it.de: ".LANG_DESCRIPTION."\",".
       "\"icons\":".
       "[".
         "{".
           "\"src\": \"launcher-icon-1x.png\",".
           "\"sizes\": \"48x48\",".
           "\"type\": \"image/png\"".
         "},".
         "{".
           "\"src\": \"launcher-icon-2x.png\",".
           "\"sizes\": \"96x96\",".
           "\"type\": \"image/png\"".
         "},".
         "{".
           "\"src\": \"launcher-icon-1x.png\",".
           "\"sizes\": \"192x192\",".
           "\"type\": \"image/png\"".
         "}".
       "],".
       "\"related_applications\":".
       "[".
         "{".
           "\"platform\": \"web\",".
           "\"url\": \"https://refugee-it.de?lang=".getCurrentLanguage()."\"".
         "}".
       "]".
     "}".
     "\n";

?>

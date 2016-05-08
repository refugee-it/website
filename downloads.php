<?php
/* Copyright (C) 2016 Stephan Kreutzer
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

if (empty($_SESSION) === true)
{
    @session_start();
}

$_SESSION['page'] = "downloads";

require_once(dirname(__FILE__)."/libraries/languagelib.inc.php");
require_once(getLanguageFile("downloads"));

$direction = getCurrentLanguageDirection();

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n".
     "<!DOCTYPE html\n".
     "    PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n".
     "    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n".
     "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"".getCurrentLanguage()."\" lang=\"".getCurrentLanguage()."\">\n".
     "    <head>\n".
     "        <title>".LANG_PAGETITLE."</title>\n".
     "        <link rel=\"stylesheet\" type=\"text/css\" href=\"mainstyle.css\"/>\n".
     "        <meta http-equiv=\"expires\" content=\"1296000\"/>\n".
     "        <meta http-equiv=\"content-type\" content=\"application/xhtml+xml; charset=UTF-8\"/>\n".
     "    </head>\n".
     "    <body>\n";

include(dirname(__FILE__)."/navigation.inc.php");

echo GetNavigation();

if ($direction === LanguageDefinition::DirectionRTL)
{
    echo "        <div id=\"content_rtl\">\n";
}
else
{
    echo "        <div id=\"content\">\n";
}



echo "<div>\n".
     "  <h1>".LANG_HEADER."</h1>\n".
     "  <div>\n".
     "    <h2>".LANG_HEADER_LANGSAM_GESPROCHENE_NACHRICHTEN."</h2>\n".
     "    <p>\n".
     "      ".sprintf(LANG_DESCRIPTION_LANGSAM_GESPROCHENE_NACHRICHTEN, "<a href=\"http://www.dw.com/de/deutsch-lernen/nachrichten/s-8030\">", "</a>", "<a href=\"http://www.dw.com\">", "</a>", "<code>", "</code>", "<code>", "</code>")."\n".
     "    </p>\n".
     "    <ul>\n".
     "      <li>\n".
     "        Commit 1: <a href=\"https://github.com/refugee-it/clients/releases/download/2016-04-19/clients-1.zip\">langsam_gesprochene_nachrichten_downloader_1</a> (md5sum <code>4ee712b84ea400fafecf1eea26bf9989</code>)\n".
     "      </li>\n".
     "    </ul>\n".
     "  </div>\n".
     "</div>\n";

echo "        </div>\n".
     "    </body>\n".
     "</html>\n".
     "\n";



?>

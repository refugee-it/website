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

require_once("./libraries/languagelib.inc.php");
require_once(getLanguageFile("index"));

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

require_once("./language_selector.inc.php");
echo getHTMLLanguageSelector("index.php");

echo "          <div>\n".
     "            <h1>".LANG_ABOUT_HEADER."</h1>\n".
     "            <p>\n".
     "              ".LANG_ABOUT_TEXT."<a href=\"requests.php\">".LANG_LINK_FORM."</a>".LANG_ABOUT_POSTTEXT."\n".
     "            </p>\n".
     "          </div>\n".
     "          <div>\n".
     "            <p>\n".
     "              ".LANG_SOURCE_ON."<a href=\"https://github.com/refugee-it/website\">GitHub</a>".LANG_SOURCE_POST."\n".
     "            </p>\n".
     "          </div>\n";

echo "        </div>\n".
     "    </body>\n".
     "</html>\n".
     "\n";



?>

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

require_once(dirname(__FILE__)."/libraries/languagelib.inc.php");
require_once(getLanguageFile("info"));

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
     "        <style type=\"text/css\">\n".
     "          .table_bordered\n".
     "          {\n".
     "              border: 1px solid black;\n".
     "              border-collapse: collapse;\n".
     "          }\n".
     "        </style>\n".
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
     "    <table class=\"table_bordered\">\n".
     "      <tr>\n".
     "        <th class=\"table_bordered\">".LANG_TABLE_HEADER_NAME."</th>\n".
     "        <th class=\"table_bordered\">de</th>\n".
     "        <th class=\"table_bordered\">ar</th>\n".
     "        <th class=\"table_bordered\">en</th>\n".
     "        <th class=\"table_bordered\">".LANG_TABLE_HEADER_DESCRIPTION."</th>\n".
     "      </tr>\n".
     "      <tr>\n".
     "        <td class=\"table_bordered\">".LANG_TABLE_MATERIAL_EDUCATION_SYSTEM_NAME."</td>\n".
     "        <td class=\"table_bordered\"><a href=\"./info/german_education_system_simplyfied_de.pdf\">pdf</a>, <a href=\"german_education_system_simplyfied_de.dia\">dia</a></td>\n".
     "        <td class=\"table_bordered\"></td>\n".
     "        <td class=\"table_bordered\"><a href=\"./info/german_education_system_simplyfied_en.pdf\">pdf</a>, <a href=\"german_education_system_simplyfied_en.dia\">dia</a></td>\n".
     "        <td class=\"table_bordered\">".LANG_TABLE_MATERIAL_EDUCATION_SYSTEM_DESCRIPTION."</td>\n".
     "      </tr>\n".
     "    </table>\n".
     "  </div>\n".
     "</div>\n";

echo "        </div>\n".
     "    </body>\n".
     "</html>\n".
     "\n";



?>

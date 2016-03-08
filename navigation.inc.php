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

function GetNavigation()
{
    require_once("./libraries/languagelib.inc.php");
    require_once(getLanguageFile("navigation"));

    $direction = getCurrentLanguageDirection();

    if ($direction === LanguageDefinition::DirectionRTL)
    {
        $navigation = "<div id=\"navigation_rtl\">\n".
                      "  <div class=\"topic_rtl\"><a class=\"topiclink\" href=\"index.php\">".LANG_NAVIGATION_START."</a></div>\n".
                      "  <div class=\"topic_rtl\"><a class=\"topiclink\" href=\"info.php\">".LANG_NAVIGATION_INFO."</a></div>\n".
                      "  <div class=\"topic_rtl\"><a class=\"topiclink\" href=\"requests.php\">".LANG_NAVIGATION_REQUESTS."</a></div>\n".
                      "  <div class=\"topic_rtl\"><a class=\"topiclink\" href=\"impressum.php\">".LANG_NAVIGATION_IMPRESSUM."</a></div>\n".
                      "</div>\n";
    }
    else
    {
        $navigation = "<div id=\"navigation\">\n".
                      "  <div class=\"topic\"><a class=\"topiclink\" href=\"index.php\">".LANG_NAVIGATION_START."</a></div>\n".
                      "  <div class=\"topic\"><a class=\"topiclink\" href=\"info.php\">".LANG_NAVIGATION_INFO."</a></div>\n".
                      "  <div class=\"topic\"><a class=\"topiclink\" href=\"requests.php\">".LANG_NAVIGATION_REQUESTS."</a></div>\n".
                      "  <div class=\"topic\"><a class=\"topiclink\" href=\"impressum.php\">".LANG_NAVIGATION_IMPRESSUM."</a></div>\n".
                      "</div>\n";
    }

    return $navigation;
}

?>

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

function GetNavigation($basedir = ".")
{
    require_once(dirname(__FILE__)."/libraries/languagelib.inc.php");
    require_once(getLanguageFile("navigation", dirname(__FILE__)));

    $direction = getCurrentLanguageDirection();

    if ($direction === LanguageDefinition::DirectionRTL)
    {
        $direction = "_rtl";
    }
    else
    {
        $direction = "";
    }

    $navigation = "<div id=\"navigation".$direction."\">\n".
                  "  <div class=\"topic".$direction."\"><a class=\"topiclink\" href=\"".$basedir."/index.php\">".LANG_NAVIGATION_START."</a></div>\n".
                  "  <div class=\"topic".$direction."\"><a class=\"topiclink\" href=\"".$basedir."/info.php\">".LANG_NAVIGATION_INFO."</a></div>\n".
                  "  <div class=\"topic".$direction."\"><a class=\"topiclink\" href=\"".$basedir."/local.php\">".LANG_NAVIGATION_LOCAL."</a></div>\n".
                  "  <div class=\"topic".$direction."\"><a class=\"topiclink\" href=\"".$basedir."/downloads.php\">".LANG_NAVIGATION_DOWNLOADS."</a></div>\n".
                  "  <div class=\"topic".$direction."\"><a class=\"topiclink\" href=\"".$basedir."/requests.php\">".LANG_NAVIGATION_REQUESTS."</a></div>\n".
                  "  <div class=\"topic".$direction."\"><a class=\"topiclink\" href=\"".$basedir."/impressum.php\">".LANG_NAVIGATION_IMPRESSUM."</a></div>\n".
                  "</div>\n";

    if (isset($_SESSION['page']) === true)
    {
        switch ($_SESSION['page'])
        {
        case "local":
        case "local_74321_bietigheimbissingen":
            $navigation .= "<div id=\"subnavigation1".$direction."\">\n".
                           "  <div class=\"topic".$direction."\"><a class=\"topiclink\" href=\"".$basedir."/local/74321_bietigheimbissingen/index.php\">Bietigheim-Bissingen</a></div>\n".
                           "</div>\n";
            break;
        }
    }

    return $navigation;
}

?>

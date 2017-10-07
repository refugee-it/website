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

$_SESSION['page'] = "requests";
unset($_SESSION['subpage']);

require_once(dirname(__FILE__)."/config.inc.php");
require_once(dirname(__FILE__)."/libraries/languagelib.inc.php");
require_once(getLanguageFile("requests"));

$direction = getCurrentLanguageDirection();

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n".
     "<!DOCTYPE html\n".
     "    PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n".
     "    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n".
     "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"".getCurrentLanguage()."\" lang=\"".getCurrentLanguage()."\">\n".
     "    <head>\n".
     "        <meta http-equiv=\"content-type\" content=\"application/xhtml+xml; charset=UTF-8\"/>\n".
     "        <title>".LANG_PAGETITLE."</title>\n".
     "        <link rel=\"stylesheet\" type=\"text/css\" href=\"mainstyle.css\"/>\n".
     "        <meta http-equiv=\"expires\" content=\"1296000\"/>\n".
     "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>\n".
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
     "  <h1>".LANG_HEADER."</h1>\n";

if (CONFIG_WEBMASTER_EMAIL !== "somebody@exampe.org")
{
    $pretext = "";
    
    if (isset($_GET['pretext']) === true)
    {
        $pretext = htmlspecialchars($_GET['pretext'], ENT_COMPAT | ENT_HTML401, "UTF-8");
    }
    
    echo "  <p>\n".
         "    ".LANG_DESCRIPTION."\n".
         "  </p>\n".
         "  <script type=\"text/javascript\" src=\"./contact.js\"></script>\n".
         "  <form action=\"\" method=\"post\">\n".
         "    <fieldset id=\"form\">\n".
         "      <textarea id=\"message\" cols=\"80\" rows=\"24\">".$pretext."</textarea><br/>\n".
         "      <input id=\"e_mail\" type=\"text\" size=\"40\" maxlength=\"80\"/> ".LANG_EMAILADDRESS."<br/>\n".
         "      <input id=\"send\" type=\"button\" value=\"".LANG_SEND."\" onclick=\"request();\"/><br/>\n".
         "    </fieldset>\n".
         "  </form>\n";
}
else
{
    echo "  <p>\n".
         "    No webmaster e-mail address set in config.inc.php.\n".
         "  </p>\n";
}

echo "</div>\n";

echo "        </div>\n".
     "    </body>\n".
     "</html>\n".
     "\n";



?>

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

$_SESSION['page'] = "local_74321_bietigheimbissingen";

require_once(dirname(__FILE__)."/../../libraries/languagelib.inc.php");
require_once(getLanguageFile("index"));

$direction = getCurrentLanguageDirection();

if ($direction === LanguageDefinition::DirectionRTL)
{
    $direction = "_rtl";
}
else
{
    $direction = "";
}

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n".
     "<!DOCTYPE html\n".
     "    PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"\n".
     "    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">\n".
     "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"".getCurrentLanguage()."\" lang=\"".getCurrentLanguage()."\">\n".
     "    <head>\n".
     "        <title>".LANG_PAGETITLE."</title>\n".
     "        <link rel=\"stylesheet\" type=\"text/css\" href=\"../../mainstyle.css\"/>\n".
     "        <meta http-equiv=\"expires\" content=\"1296000\"/>\n".
     "        <meta http-equiv=\"content-type\" content=\"application/xhtml+xml; charset=UTF-8\"/>\n".
     "    </head>\n".
     "    <body>\n";

include(dirname(__FILE__)."/../../navigation.inc.php");

echo GetNavigation("../..");

echo "        <div id=\"content".$direction."\">\n";

echo "<div>\n".
     "  <h1>".LANG_HEADER."</h1>\n".
     "  <div>\n".
     "    <h2>".LANG_HEADER_COMPUTER."</h2>\n".
     "    <div>\n".
     "      <ol>\n".
     "        <li><a href=\"#section_notebooks\">".LANG_SECTION_NOTEBOOKS."</a></li>\n".
     "        <li><a href=\"#section_pcs\">".LANG_SECTION_PCS."</a></li>\n".
     "        <li><a href=\"#section_peripherals\">".LANG_SECTION_PERIPHERALS."</a></li>\n".
     "      </ol>\n".
     "      <p>\n".
     "        ".LANG_EXPLANATION_DEPOSIT."\n".
     "      </p>\n".
     "    </div>\n".
     "    <h3><a name=\"section_notebooks\"/>".LANG_SECTION_NOTEBOOKS."</h3>\n".
     "    <div>\n".
     "      <div>\n".
     "        <h4>Notebook 3</h4>\n".
     "        <a href=\"notebook_3.png\" class=\"image_floatleft".$direction."\"><img src=\"notebook_3_thumbnail.png\" width=\"183px\" height=\"200px\" alt=\"Notebook 3\" title=\"Notebook 3\"/></a>\n".
     "        <p>\n".
     "          <span class=\"available\">".LANG_STATUS_AVAILABLE."</span>".LANG_DESCRIPTION_NOTEBOOK_3."\n".
     "          <a href=\"../../requests.php?pretext=".LANG_PRETEXT.$_SESSION['page']."_request_notebook_3\">".LANG_REQUEST_NOW."</a>\n".
     "        </p>\n".
     "        <div class=\"image_floatleft_end".$direction."\"/>\n".
     "      </div>\n".
     "    </div>\n".
     "    <div>\n".
     "      <h3><a name=\"section_pcs\"/>".LANG_SECTION_PCS."</h3>\n".
     "      <div>\n".
     "        <h4>PC 1</h4>\n".
     "        <a href=\"pc_1.png\" class=\"image_floatleft".$direction."\"><img src=\"pc_1_thumbnail.png\" width=\"177px\" height=\"200px\" alt=\"PC 1\" title=\"PC 1\"/></a>\n".
     "        <p>\n".
     "          <span class=\"not_available\">".LANG_STATUS_NOT_AVAILABLE."</span>".LANG_DESCRIPTION_PC_1."\n".
     "          <a href=\"../../requests.php?pretext=".LANG_PRETEXT.$_SESSION['page']."_request_pc_1\">".LANG_REQUEST_SIMILAR."</a>\n".
     "        </p>\n".
     "        <div class=\"image_floatleft_end".$direction."\"/>\n".
     "      </div>\n".
     "    </div>\n".
     "    <div>\n".
     "      <h3><a name=\"section_peripherals\"/>".LANG_SECTION_PERIPHERALS."</h3>\n".
     "      <div>\n".
     "        <h4>".LANG_CDDVD_READERWRITER_EXTERNAL."</h4>\n".
     "        <a href=\"external_cd_dvd_reader_writer.png\" class=\"image_floatleft".$direction."\"><img src=\"external_cd_dvd_reader_writer_thumbnail.png\" width=\"300px\" height=\"200px\" alt=\"".LANG_CDDVD_READERWRITER_EXTERNAL."\" title=\"".LANG_CDDVD_READERWRITER_EXTERNAL."\"/></a>\n".
     "        <p>\n".
     "          <span class=\"available\">".LANG_STATUS_AVAILABLE."</span>".LANG_DESCRIPTION_CDDVD_READERWRITER_EXTERNAL."\n".
     "          <a href=\"../../requests.php?pretext=".LANG_PRETEXT.$_SESSION['page']."_request_external_cddvd_readerwriter\">".LANG_REQUEST_NOW."</a>\n".
     "        </p>\n".
     "        <div class=\"image_floatleft_end".$direction."\"/>\n".
     "      </div>\n".
     "    </div>\n".
     "  </div>\n".
     "</div>\n";

echo "        </div>\n".
     "    </body>\n".
     "</html>\n".
     "\n";



?>

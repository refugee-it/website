<?php
/* Copyright (C) 2012-2016 Stephan Kreutzer
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



require_once(dirname(__FILE__)."/config.inc.php");



if (isset($_POST['e_mail']) != true &&
    isset($_POST['content']) != true)
{
    return 0;
}

$success = false;
$message = "Time: ".date("c")."\n";
$message .= "Type: refugee-it.de contact\n";

if (isset($_POST['e_mail']) === true)
{
    $message .= "E-Mail: ".htmlspecialchars($_POST['e_mail'], ENT_COMPAT | ENT_HTML401, "UTF-8")."\n";
}

if (isset($_POST['content']) === true)
{
    $message .= "Message: ".htmlspecialchars($_POST['content'], ENT_COMPAT | ENT_HTML401, "UTF-8")."\n";
}


if (@mail(CONFIG_WEBMASTER_EMAIL,
          "[refugee-it.de] Request",
          $message,
          "From: ".CONFIG_WEBMASTER_EMAIL."\n".
          "MIME-Version: 1.0\n".
          "Content-type: text/plain; charset=UTF-8\n") === true)
{
    $success = true;
}

$message .= "------------------------------------------\n";

{
    $fp = @fopen(dirname(__FILE__)."/logs/request.log", "ab");

    if ($fp != false)
    {
        if (@fwrite($fp, $message) != false)
        {
            $success = true;
        }

        @fclose($fp);
    }
}

header("Content-Type: text/xml");

echo "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>".
     "<response><result>";

if ($success === true)
{
    echo "success";
}
else
{
    echo "failure";
}

echo "</result></response>";



?>
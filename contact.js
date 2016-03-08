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

var xmlhttp = null;

// Mozilla
if (window.XMLHttpRequest)
{
    xmlhttp = new XMLHttpRequest();
}
// IE
else if (window.ActiveXObject)
{
    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
}

function request()
{
    var eMail = document.getElementById('e_mail');
    var content = document.getElementById('message');


    if (xmlhttp != null &&
        eMail != null &&
        content != null)
    {
        var requestPath = "";

        {
            var scripts = document.getElementsByTagName("script");
            // 'scripts' contains always the last script tag that was loaded.
            var myPath = scripts[scripts.length-1].src;

            requestPath = myPath.substring(0, myPath.lastIndexOf('/'));
            requestPath += "/request.php";
        }

        // 'file://' is bad.
        if (requestPath.substring(0, 7) == "file://")
        {
            requestPath = requestPath.substr(8);
            requestPath = "http://" + requestPath;
        }

        xmlhttp.open('POST', requestPath, true);
        xmlhttp.setRequestHeader('Content-Type',
                                 'application/x-www-form-urlencoded');
        xmlhttp.onreadystatechange = result;
        xmlhttp.send('e_mail=' + encodeURIComponent(eMail.value) + '&' +
                     'content=' + encodeURIComponent(content.value));
    }
}

function result()
{
    if (xmlhttp.readyState != 4)
    {
        // Waiting...
    }

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
    {
        if (xmlhttp.responseText == '')
        {
            return;
        }

        var dom = xmlhttp.responseXML.documentElement;
        var result = dom.getElementsByTagName('result').item(0).firstChild.data;
        var form = document.getElementById('form');

        if (form != null)
        {
            if (result == "success")
            {
                form.innerHTML = "<p>Thank you!</p>";
            }
            else if (result == "failure")
            {
                form.innerHTML = "<p>Failed...</p>";
            }
            else
            {
                form.innerHTML = "<p>Unknown status...</p>";
            }
        }
    }
    else if (xmlhttp.readyState == 4 && xmlhttp.status == 0)
    {
        var form = document.getElementById('form');

        if (form != null)
        {
            form.innerHTML = "<p>Offline...</p>";
        }
    }
}

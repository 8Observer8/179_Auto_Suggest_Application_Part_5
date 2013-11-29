<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script type="text/javascript">
            function findmatch() {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById('result').innerHTML = xmlhttp.responseText;
                    }
                }
                
                xmlhttp.open('GET', 'search.inc.php?search_text='+document.search.search_text.value, true);
                xmlhttp.send();
            }
        </script>
        
    </head>
    <body>
        <form id="search" name="search">
            Type a name:<br />
            <input type="text" name="search_text" onkeyup="findmatch();" />
        </form>
        
        <div id="result"></div>
    </body>
</html>

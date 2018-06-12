<!DOCTYPE html>
<html>
    <head>
        <title>Lapas nosaukums</title>
        <meta charset="utf-8">
    </head>
    <body>
        <!--ELEMENTI-->
        <h1 id="topelement">topelement ID</h1>
        <b></b> = <strong></strong> <!--for visually impaired-->
        <i></i> = <em></em> <!--for visually impaired-->
        <span></span> <!--kad vajag kko izdarīt inline,bet nezinu,kādu elementu izmantot-->
        <ol></ol> <!--ordered list-->
        <ul></ul> <!--unordered list-->
        <li></li> <!--list--> 
        <br> <!--break--> 
        <hr> <!--horizontal rule--> 
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Picea_abies.jpg/220px-Picea_abies.jpg" width="100px"> <!--image--> 
        <a href="https://www.google.lv/" target="_blank">Links uz google</a> <!--anchor=linki-->
        <a href="#topelement">Izsaukts links ar ID</a>  <!--aizved uz h1--> 

        <table border="2"> <!--pieliek rāmi-->
            <tr>
                <th>table data 1</th> <!--th=table head--> 
                <th>table data 2</th>
                <th>table data 3</th>
            </tr>
            <tr>
                <!--ņem ārā priekš rowspan <td>table data 4</td> -->
                <td>table data 5</td>
                <td>table data 6</td>
            </tr>
            <tr>
                <td rowspan="2">table data 10</td>
                <td>table data 11</td>
                <td>table data 12</td>
            </tr>
            <tr>
                <td colspan="3">table data 7</td> <!--colspan=sapludina tabulas-->
                <!--otro,trešo tabulu izdzēš <td>table data 8</td>
                <td>table data 9</td> -->
            </tr>
          
        </table>
    </body>
</html>
<?php

echo'
<form class="" action="" method="post">
  <label for="test">Test</label>
  <input type="text" name="test_code" value="" id="label_test">
</form>';








?>
<script type="text/javascript">
//AJAX pour recupérer les données de la base de données budget!!

function infoBudget(str) {
    if (str == "") {
        document.getElementById("label_test").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("situationEngagement").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","pageRequete.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

getCookie("cookie_name");

function my_text(cible){
	var elem = document.getElementById(cible);
	var text = prompt("Please Enter you list", "");
    if (text != null){
    	setCookie("cookie_name", text);
    	ajouteElement(text);
    }
}

function setCookie(sName, sValue) {
    var today = new Date(), expires = new Date();
    expires.setTime(today.getTime() + (365*24*60*60*1000));
    var cook = "" + sName + "=" + sValue + ";expires=" + expires.toGMTString()+";";
    document.cookie += ";" + cook;
    alert(document.cookie);
 }

function ajouteElement(text) {
  var nouveauDiv = document.createElement("div");
  var nouveauContenu = document.createTextNode(text);
  nouveauDiv.appendChild(nouveauContenu);
  var divActuel = document.getElementById("ft_list");
  document.body.insertBefore(nouveauDiv, divActuel);

}

/*function getCookie(sName) {
    var cookContent = document.cookie, cookEnd, i, j;
    var sName = sName + "=";
 
    for (i=0, c=cookContent.length; i<c; i++) {
    	j = i + sName.length;
    	if (cookContent.substring(i, j) == sName) {
        	cookEnd = cookContent.indexOf(";", j);
        	if (cookEnd == -1) {
            	cookEnd = cookContent.length;
            }
            console.log(cookEnd);
            console.log(decodeURIComponent(cookContent.substring(j, cookEnd)));
        }
    }
}*/

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
   // for(var i = 0; i <ca.length; i++) {
      	i = 0;
        var c = ca[i];
        console.log(c);
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            //alert(c.substring(name.length, c.length));
        }
    //}
    return "";
}
function getFilms() {
			document.getElementById("ddm_demo").innerHTML = "Otsin...";
			var jsDate = document.getElementById("date1").value;
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
						document.getElementById("ddm_demo").innerHTML = xhttp.responseText;
					}
				};
				xhttp.open("GET", "kinokava_dbajax.php?phpDate=" + jsDate, true);
				xhttp.send();
}
		
function dbFormat(year, month, day) {
	    var result;
		year = year.toString();
		month++;
		month = month.toString();
		if (month.length < 2) {
		    month = "0" + month;
		}
		day = day.toString();
		if (day.length < 2) {
		    day = "0" + day;    
	    }
		result = year + "-" + month + "-" + day;
		return result;
}
	

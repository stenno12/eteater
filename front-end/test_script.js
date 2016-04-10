function mfunction(){
				var fullCat = {begin:"Kitty cat", end:"Black Cat", legs:4};
				document.getElementById("demo").innerHTML = fullCat.end;
			}
			
function aex(){
			    var fn = document.forms["sform"]["ip"].value;
				var ln = document.forms["sform"]["ip2"].value;
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (xhttp.readyState == 4 && xhttp.status == 200) {
						document.getElementById("demo").innerHTML = xhttp.responseText;
					}
				};
				xhttp.open("POST", "dbajax.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("fn=" + fn + "&ln=" + ln);
			}
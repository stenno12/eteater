var da = new Date();
var da2 = new Date();
da2.setDate(da.getDate()+ 1);
var da3 = new Date();
da3.setDate(da.getDate() + 2);
var da4 = new Date();
da4.setDate(da.getDate() + 3);
var da5 = new Date();
da5.setDate(da.getDate() + 4);
	
var todayOption = document.createElement("option");
todayOption.text = dbFormat(da.getFullYear(), da.getMonth(), da.getDate());
var twodayOption = document.createElement("option");
twodayOption.text = dbFormat(da2.getFullYear(), da2.getMonth(), da2.getDate());
var threedayOption = document.createElement("option");
threedayOption.text = dbFormat(da3.getFullYear(), da3.getMonth(), da3.getDate());
var fourdayOption = document.createElement("option");
fourdayOption.text = dbFormat(da4.getFullYear(), da4.getMonth(), da4.getDate());
var fivedayOption = document.createElement("option");
fivedayOption.text = dbFormat(da5.getFullYear(), da5.getMonth(), da5.getDate());
	
document.getElementById("date1").add(todayOption);
document.getElementById("date1").add(twodayOption);
document.getElementById("date1").add(threedayOption);
document.getElementById("date1").add(fourdayOption);
document.getElementById("date1").add(fivedayOption);
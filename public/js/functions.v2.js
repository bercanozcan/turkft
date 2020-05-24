//focus animate
function focusAnimate(focusSelector){
	var pos = $(focusSelector).offset();
	$("body").animate({ scrollTop: (pos.top-200) });
}

//validate email
function validateEmail(email) {
	var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	return re.test(email);
}

//isdate
function isDate(Year, Month, Day) {
    try {
		var Year = parseInt(Year, 10);
		var Month = parseInt(Month, 10);
		var Day = parseInt(Day, 10);
        var OK = true;
		if (OK = ((Year > 1900) && (Year < new Date().getFullYear()))) {
			if (OK = (Month <= 12 && Month > 0)) {

				var LeapYear = (((Year % 4) == 0) && ((Year % 100) != 0) || ((Year % 400) == 0));   
				
				if(OK = Day > 0)
				{
					if (Month == 2) {  
						OK = LeapYear ? Day <= 29 : Day <= 28;
					} 
					else {
						if ((Month == 4) || (Month == 6) || (Month == 9) || (Month == 11)) {
							OK = Day <= 30;
						}
						else {
							OK = Day <= 31;
						}
					}
				}
			}
		}
        return OK;
    }
    catch (e) {
        return false;
    }
} 


//share function
function share(social, text, url, image){
    if(social != "facebook" && social != "twitter" && social != "googleplus" && social != "pinterest" && social != "mail") 
    { 
        console.log("Share not found"); 
        return false; 
    }

    text = encodeURIComponent(text) || encodeURIComponent(document.title);
    var share_url = encodeURIComponent(url) || encodeURIComponent(location.href);

    switch(social) {

        case "facebook":
            var sharer = "https://www.facebook.com/sharer/sharer.php?u=" + share_url;
            window.open(sharer, 'sharer', 'width=626,height=436');
        break;

        case "twitter": 
            var sharer = "http://twitter.com/share?text="+text+"&url="+share_url;
            window.open(sharer, 'sharer', 'width=626,height=436');
        break;

        case "googleplus":
            var sharer = "https://plus.google.com/share?url=" + share_url;
            window.open(sharer, 'sharer', 'width=626,height=436'); 
        break;

        case "pinterest": 
            (function(d){
              var f = d.getElementsByTagName('SCRIPT')[0], p = d.createElement('SCRIPT');
              p.type = 'text/javascript';
              p.async = true;
              p.src = '//assets.pinterest.com/js/pinit.js';
              f.parentNode.insertBefore(p, f);
            }(document));

            var sharer = "http://pinterest.com/pin/create/button/?url=" + share_url + "&media" +  encodeURIComponent(image) + "&description=" + encodeURIComponent(text);
            window.open(sharer, 'sharer', 'width=626,height=436');
        break;

        case "mail":
            location.href = "mailto:?subject="+text+"&body=" + share_url + "";
        break;
    }
}


//querystring find
function queryString(qString){
    var hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        if(hash[0] == qString) return hash[1];
    }
	return ""; //not find
}
//queryStringAdd(window.location.href, "categoryfilter", $("input[name=categoryfilter]:checked").serialize())
function queryStringAdd(qString, qQuery, qValues){
	var qsArray = qString.split('?');
	var qsUrl = qsArray[0];
	var qsQuery = "";
	if(qsArray.length > 1) qsQuery = qsArray[1];
	qValues = qValues.replace(new RegExp("&"+qQuery+"=", "g"), ",").replace(new RegExp(qQuery+"=", "g"), "");
	if(qsQuery == ""){
		qNewUrl = qsUrl + "?" + qQuery + "=" + qValues;
	}
	else{
		qNewUrl = qsUrl + "?" + String(qsQuery.replace(new RegExp(qQuery+"=" + queryString(qQuery), "g"), "")
			.replace(new RegExp(qQuery+"=", "g"), "") + "&" + qQuery+"=" + qValues)
			.replace(/&&/g, "&");
		var qNewUrlArray = qNewUrl.split("?&");
		if(qNewUrlArray.length > 1) qNewUrl = qNewUrlArray[0] + "?" + qNewUrlArray[1]
	}
	return qNewUrl;
}

//numeric control
function numericControl(evt){
	evt = (evt) ? evt : event;
	var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
	if ((charCode < 48 || charCode > 57) && charCode != 13){
		return false;
	};
};
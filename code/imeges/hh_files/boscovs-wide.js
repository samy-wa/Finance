///////////////////////////////////////////////////////////////////// boscovs.js  begin ///////////////////////////////////////////////////////////////////
$(document).ready(function(){
	/* HEADER CART SCRIPTS END */
	$( "#cart_toggle" ).click(function() {
        if ($("#cart_flyout").is(":visible"))
        {
            $( "#cart_flyout" ).hide();
            $( "#cart_toggle" ).removeClass( "border-dark-blue" );   
        } else {
			$( "#cart_flyout" ).show();
			$( "#cart_toggle" ).addClass( "border-dark-blue" );
	    	$( "#close_flyout" ).click(function() {
	            $( "#cart_flyout" ).hide();
	            $( "#cart_toggle" ).removeClass( "border-dark-blue" );
	        });
        } 
    });
	$(document).on('click', function(event) {
    	if (!$(event.target).closest('#cart_flyout').length && !$(event.target).closest('#cart_toggle').length) {
		    $( "#cart_flyout" ).hide();
            $( "#cart_toggle" ).removeClass( "border-dark-blue" );
        }
   	});
	/* Scrolling functions for header */
	$(window).scroll(function(){
        if ($(this).scrollTop() > 1) {
            $('.fixed-header').addClass('fixed');
            $('.fixed-header-padding').addClass('fixed-padding-on');
            $('.fixed-show-scrolling').addClass('show');
            $('.fixed-hide-scrolling').addClass('hide');
            $('.fixed-secondary-header').addClass('fixed-padding');
        } else {
            $('.fixed-header').removeClass('fixed');
            $('.fixed-header-padding').removeClass('fixed-padding-on');
            $('.fixed-show-scrolling').removeClass('show');
            $('.fixed-hide-scrolling').removeClass('hide');
            $('.fixed-secondary-header').removeClass('fixed-padding');
        }
    });
	//Close any open multi-select boxes when scrolling the page.
	$(window).bind('scroll', function () {
		if ($(".ui-multiselect-menu").length > 0)
			if ($(".ui-multiselect-menu").css('display') == 'block')
				$("select").multiselect("close");
    });

	/*Modal for PDFs*/
	$(".pdfLinkModalOpen").bind('click', function(){
		var linkAddress = $(this).attr("href");
		var linkTitle = $(this).text();
		if ($("#pdfIframe").length) {
			$("#pdfIframe").attr("src", linkAddress);
			$("#pdfLinkModal .modal-header h4").text(linkTitle);
			$('#pdfLinkModal').modal({show: true});	
			return false;
		}
		return true;
	});
	/* Watermark for Search Box Text */
	$('#searchText').watermark({textAttr: 'placeholder'});
	
	$('.menuItems li ul').each(function(){  
        var liItems = $(this);
        var Sum = 0;
        if(liItems.children('li').length >= 1){
            $(this).children('li').each(function(i, e){
                Sum += $(e).outerWidth(true);
            });
            $(this).width(Sum+1);
        } 
    });
    $(function () {
        $(".menuItems li").on('mouseenter', function (e) {
            if ($('ul', this).length) {
                var elm = $('ul:first', this);
                var pageOff = elm.offset().left;
                var off = elm.parent().position();
                var l = off.left;
                var w = elm.width();
                var docH = $("#main_menu").height();
                var docW = $("#main_menu").width();
                var isEntirelyVisible = (l + w <= docW);
                if (!isEntirelyVisible) {
                    if (pageOff >= w) {
                        $(this).addClass('rightedge');
                    } else {
                        $(this).addClass('leftedge');
                    }
                } else {
                    $(this).addClass('nonedge');
                }
            }
        });
        $(".menuItems li").on('mouseleave', function (e) {
            $(this).removeClass('edge nonedge rightedge leftedge');
        });
    });
    
    $('.numericOnly').bind('keypress', function(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode;
		if (charCode < 48 || charCode > 57) {
			event.preventDefault();
        }
    });
});

/* HEADER CART SCRIPTS END */

function updateHeaderCart(storeContextPath)
{
	var url = storeContextPath + "/shopping-bag-preview.json";
	// setup object array of variables to pass to ajax 
	var options =
	{
		url : url,
		cache : false,
		success : function(jsonData) 
		{  
			if (jsonData.hasData !== undefined && jsonData.hasData == "true")
			{
				if (jsonData.shoppingBagSize > 0)
				{
					$(".cart-total").html("My Cart<br/>$" + Number(jsonData.shoppingBagTotal).toFixed(2));	
					$(".cart-count").text(jsonData.shoppingBagSize);
				}
				$.views.converters({
					decformat: function(decimalValue){	  
					if(decimalValue === undefined)
						return decimalValue;  
					if(isNaN(decimalValue))
						return decimalValue; 
					return new Number(decimalValue).toFixed(2);
					}
				});
				var sbTemplate = $.templates("#shoppingBagHeaderTemplate"); 
				var htmlOutput = sbTemplate.render(jsonData);
				$("#cart_flyout").html(htmlOutput);
			}
		}
	};
	//execute ajax call
	$.ajax(options);
}
/* HEADER CART SCRIPTS END */

/* Search Box Functions */
function verifySearchType()
{
	var searchText = $('#searchText').val();
	if (searchText === 'search by brand/internet#' || searchText === '')
		return false;
	var encodedST = encodeURIComponent(searchText);
			
	var options = { url : "/shop/search-type.js?searchText=" + encodedST, async : false};
	var response = $.ajax(options);
	var data = jQuery.parseJSON(response.responseText);
	if(data.isRedirect == "true")
	{
		var myWindow=window.open(data.url,'','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width=800,height=600');
		if (myWindow != null)
			myWindow.focus();
		return false;
	}	
	return true;
}
function verifySearchAgainType()
{
	var searchText = $('#search-error').val();
	if (searchText === 'Try another search e.g. shoes, jewelry, toys, etc.' || searchText === '')
		return false;
	var encodedST = encodeURIComponent(searchText);
			
	var options = { url : "/shop/search-type.js?searchText=" + encodedST, async : false};
	var response = $.ajax(options);
	var data = jQuery.parseJSON(response.responseText);
	if(data.isRedirect == "true")
	{
		var myWindow=window.open(data.url,'','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width=800,height=600');
		if (myWindow != null)
			myWindow.focus();
		return false;
	}	
	return true;
}
function validateSearchData() 
{
	var input = $('#searchText').val();
	var url =  homeServer+"/shop/search-type.js?searchText="+input;

	jQuery.getJSON(url+"&callback=?", function(data) 
	{
		if( data.isRedirect == "true")
		{
			var myWindow=window.open(data.url,'','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width=800,height=600');
			myWindow.focus();
		}
		else
		{
			$('#searchForm').submit();
		}
	});
	return false;
}

/* Breadcrumb Script */

function displayClickHistory(jsonData)
{
	if(jsonData !== undefined && jsonData.clickHistory.length > 0) 
	{
		printBreadCrumb('#breadcrumb-top',jsonData);
		printBreadCrumb('#breadcrumb-bottom',jsonData);
	}
}

function printBreadCrumb(divId, jsonData) 
{
	var breadCrumbDiv = $(divId);
	
	/* If div isn't in page don't try to display breadcrumbs. */
	if (breadCrumbDiv !== null && breadCrumbDiv !== undefined)
	{
		var historySize = jsonData.clickHistory.length - 1;
		
		// Promotion products will show bread crumb to get back to promotions assortment.
		if (historySize == 0)
		{
			var topBreadCrumbLabel = jsonData.clickHistory[0].label;

			if (topBreadCrumbLabel.indexOf("Promotional Choice") != -1)
			{			
				historySize = 1;			
			}
		}

		for ( var x = 0; x < historySize; x++) 
		{
			var breadCrumbLink = $('<a />');
			var breadCrumbUrl = jsonData.clickHistory[x].url;
			var breadCrumbLabel = jsonData.clickHistory[x].label;
			var breadCrumbRch = jsonData.clickHistory[x].rch;
			var breadCrumbPdn = jsonData.clickHistory[x].pdn;
			
			breadCrumbLink.attr('href', breadCrumbUrl);
			breadCrumbLink.attr("class", "bread-crumb no-underline medium-blue");
			
			if (breadCrumbRch !== undefined)
				breadCrumbLink.attr('data-bos-rch', breadCrumbRch);
			
			if (breadCrumbPdn !== undefined)
				breadCrumbLink.attr('data-bos-pdn', breadCrumbPdn);
			
			//breadCrumbLink.attr('onclick', "departmentSubmit(this, event, '/shop');");
			
			breadCrumbLink.text(breadCrumbLabel);
			breadCrumbDiv.append(breadCrumbLink);
			if (x != historySize - 1) 
			{
				breadCrumbDiv.append($('<span>&nbsp;&nbsp;/&nbsp;&nbsp;</span>'));
			}
		}	
	}
}

/*Display promo gift lightbox in shopping cart and gift basket view. */
function showGiftItemChoiceModal(itemNumber) {
	var lightboxName = '#itemChoiceModal_' + itemNumber;
	$(lightboxName).modal({show: true});
}

/*
* Function to determine if customer is on handheld device.
* Function requires modernizr*.js.  Used for Liquid Pixels.
*/
function isHandheldDevice()
{
	var isHandheldDevice = false;

	if (Modernizr.touch)
	{
		isHandheldDevice = true;
	}
	else
	{
		var deviceAgent = navigator.userAgent.toLowerCase();
		var mobileAgents = ['android', 'bada', 'blackberry', 'iemobile', 'ipad', 'iphone', 'ipod', 'opera mini', 'webos', 'windows phone', 'zunewp7'];
		 
		for (var i=0; i < mobileAgents.length; i++)
		{				
			var regEx = new RegExp(mobileAgents[i], "i");					
			var agentTest = deviceAgent.match(regEx);
							
			if(agentTest != null && agentTest.length > 0)
			{
				isHandheldDevice = true;
			}
		}
	}
	return isHandheldDevice;
}

/* Returns the version of Internet Explorer or a -1
* (indicating the use of another browser). Used for Liquid Pixels.
*/
function getInternetExplorerVersion() {
	var rv = -1; // Return value assumes failure.
	if (navigator.appName == 'Microsoft Internet Explorer') {
		var ua = navigator.userAgent;
		var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
		if (re.exec(ua) != null)
			rv = parseFloat( RegExp.$1 );
	}
	return rv;
}	

/*Display Next and Previous Items*/
function displayViewMoreProducts(jsonData) {
	if (jsonData !== undefined && jsonData.hasData == 'true') 
	{
		if(jsonData.currentItemNumberIndex !== undefined)
		{
			var vmpDiv = $('.view-more-products');
			
			if (jsonData.previousItemNumber !== undefined) {
				var prevLink = $('<a />');
				var prevLinkUrl = '/shop/StoreDirectory.bos';
				if (jsonData.previousItemType == 'Product')
				{
					prevLinkUrl = '/shop/prod/'+jsonData.previousItemName+'/'+ jsonData.previousItemNumber + '.htm';	
				}
				else
				{
					prevLinkUrl = '/shop/bundle/'+jsonData.previousItemName+'/'+ jsonData.previousItemNumber + '.htm';					
				}				
				prevLink.attr('href', prevLinkUrl);
				prevLink.append("<img src='/store/content/images/paging-left-arrow.jpg' class='append-1 vertical-middle fleft' alt='Previous' />");
				vmpDiv.append(prevLink);
			}
	
			var label = $('<span/>');
			label.text(jsonData.currentItemNumberIndex + ' of ' + jsonData.totalItemNumberCount);
			vmpDiv.append(label);
	
			if (jsonData.nextItemNumber !== undefined) 
			{
				var nextLink = $('<a />');
				var nextLinkUrl = '/shop/StoreDirectory.bos';
				if (jsonData.nextItemType == 'Product')
				{
					nextLinkUrl = '/shop/prod/'+jsonData.nextItemName+'/'+ jsonData.nextItemNumber + '.htm';	
				}
				else
				{
					nextLinkUrl = '/shop/bundle/'+jsonData.nextItemName+'/'+ jsonData.nextItemNumber + '.htm';					
				}				
				nextLink.attr('href', nextLinkUrl);
				nextLink.append("<img src='/store/content/images/paging-right-arrow.jpg' class='vertical-middle prepend-1' alt='Next' />");
				vmpDiv.append(nextLink);
			}
		}
	}
}

//Popups for a few items that don't like the lightbox.
function openShoppingAssistant(){
	window.open('/shop/ShoppingAssistant.bos','newwindow','menubar=no,height=500,width=500,resizable=yes,scrollbars=yes');
}

function popupCreditAccountLogin(url) 
{
	creditWin=window.open(url,"win",'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=1,resizable=1,width=900,height=575');
    self.name = "mainWin";
}

function openAboutCoupons()
{
	window.open('AboutCoupons.bos','newwindow','menubar=no,width=600, height=450, resizable=yes,scrollbars=no');
}

function openCVV2(){
	window.open('CVV2.bos','newwindow','menubar=no,width=350,height=400,resizable=yes,scrollbars=no');
}

function openWhatsAPin()
{
	window.open('WhatsAPin.bos','newwindow','menubar=no,height=690,width=400,resizable=yes,scrollbars=no');
}

function showAdobe(imageFile)
{
	window.open(imageFile, "_blank", "width=900,height=600,resizeable=yes,scrollbars=yes");
	return false;
}

function popUp(url) 
{
	popupWin=window.open(url,"win",'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,width=570,height=450');
	self.name = "mainWin"; 
}

function popup(url, width, height) 
{
	if (!width)
		var width = 500;
	if (!height)
		var height = 450;
	
	sealWin=window.open(url,"win",'toolbar=0,location=0,directories=0,status=1,menubar=1,scrollbars=1,resizable=1,width=' + width + ',height=' + height);
    self.name = "mainWin";
}

function popupEgiftCardPreview() 
{
	var values = $(egiftCardFormDivId).serialize();
	
	$.post(egiftCardPreviewUri, values, 
	function (data) {
		var win=window.open('about:blank', '','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width=700,height=800');
	    with(win.document)
	    {
	    	write(data);
	        focus();
	        close();
	    }
	});

}

//Link paramters.
function linkParamsSubmit(link, event, storeContextPath)
{
	event.preventDefault ? event.preventDefault() : event.returnValue = false;
	
	var params = $(link).attr("data-bos-params");

	var url = storeContextPath + "/post-user-url-meta.ajax";
	
	if(params !== undefined)
	{
		url = url + "?" + params;
		
		var options =
		{
			type : "POST",
			url : url,
			complete: function(event) { window.location = $(link).attr("href"); }
		};
		
		//execute ajax call
		$.ajax(options);		
	}
}

/*scripts for gift registry link*/
function submitMarcoleRegistry()
{
	document.forms['marcolenavform'].submit();
}	

function changeFormActionAndSubmit(formName, formAction)
{
	var formObj = document.getElementById(formName);
	formObj.action = formAction;
	formObj.submit();
}

function writeExternalLinkageForm(serverUrl,sessionid, styleid, regid, rtnUrl)
{
   gol = new GenericOnlineLinker();
   gol.setServerURL(serverUrl);
   gol.setNavKey( 'guest.registryDetail' );
   gol.setTransaction( 'RegistryDetail' );
   gol.setLastTransaction( 'InitializeRetailer' );
   gol.setViewId( 'jsp' );
   gol.setSessionId(sessionid);
   gol.setStyleId( styleid );
   gol.setRegistryId( regid );
   gol.setRetailerId( '0' );
   gol.setApplId( 'gol' );
   gol.setStoreId( '80001' );
   gol.setRtnUrl( rtnUrl );
   gol.writeForm();
}

function backToRegistry()
{

	var regNum = gol.regId;
	var retUrl = gol.rtnUrl;
	var sessionId = gol.eml.sessionId;
	var url='';
	
	/* -1 = Guest, 0 = Owner (Select Products), Greater than 0 = Owner (Update Products) */  
	url = substitute(retUrl, [regNum,sessionId]);
	window.location = url;
	
}

function substitute(str, arr) 
{ 
  var i, pattern, re, n = arr.length; 
  for (i = 0; i < n; i++) { 
    pattern = "\\{" + i + "\\}"; 
    re = new RegExp(pattern, "g"); 
    str = str.replace(re, arr[i]); 
  } 
  return str; 
}

//Checks for Country/State on address forms in My Account and New Registration.  
//Pops up alert if a country/state we do not ship to is selected.
function checkCountry()
{
   	var country = document.getElementById("country");
	delivery = (country.value == 'USA'); 
	if(!delivery)	
		alert("We currently do not ship to locations outside the continental United States, including Alaska and Hawaii.");
} 
function checkState()
{
		var state   = document.getElementById('state');
			delivery = !(state.value == 'AK' || state.value == 'HI');
		if(delivery == false)
		{
			alert("We currently do not ship to locations outside the continental United States, including Alaska and Hawaii.");
 		}
} 

//used for add to cart and registry buttons.
function changeProductButtonValue(bv)
{
	$("#productSubmitButton").val(bv);
	return true;
}

//Other Functions
function replyHSBC()
{
	document.reply.submit();
}

//Automatically tab between fields on phone numbers.
function autoTab(input,len, e) 
{
	var isNN = (navigator.appName.indexOf("Netscape")!=-1);
	var keyCode = (isNN) ? e.which : e.keyCode; 
	var filter = (isNN) ? [0,8,9] : [0,8,9,16,17,18,37,38,39,40,46];
	if(input.value.length >= len && !containsElement(filter,keyCode)) 
	{
		input.value = input.value.slice(0, len);
		input.form[(getIndex(input)+1) % input.form.length].focus();
	}

	function containsElement(arr, ele) 
	{
		var found = false, index = 0;
		while(!found && index < arr.length)
		if(arr[index] == ele)
		{
			found = true;
		}
		else
		{
			index++;
		}
		return found;
	}
	
	function getIndex(input) 
	{
		var index = -1, i = 0, found = false;
		while (i < input.form.length && index == -1)
		if (input.form[i] == input)
		{
			index = i;
		}
		else 
		{
			i++;
		}
		return index;
	}
	return true;
}

//Form field toggles for contact us form.

function toggleContactUsFields()
{
	
	var subject = document.getElementById("subject").value;
	
	document.getElementById("documentNumberRow").style.display = 'none';
	document.getElementById("storeLocationRow").style.display = 'none';
	document.getElementById("orderNumberRow").style.display = 'none';
	
	document.getElementById("storeLocation").disabled=true;
	document.getElementById("documentNumber").disabled=true;
	
	//ReportPostDeliveryIssue
	if(subject == "5")
	{
		document.getElementById("documentNumberRow").style.display = '';
		document.getElementById("orderNumber").value = '';
		document.getElementById("storeLocation").value = '';
		
		document.getElementById("storeLocation").disabled=true;
		document.getElementById("documentNumber").disabled=false;
	}
	//CommentsOnRecentStoreVisit
	else if (subject == "8")
	{
		document.getElementById("storeLocationRow").style.display = '';
		document.getElementById("documentNumber").value = '';
		document.getElementById("orderNumber").value = '';
		
		document.getElementById("storeLocation").disabled=false;
		document.getElementById("documentNumber").disabled=true;
	}
	//OnlineAndPhoneOrders
	else if(subject == "1")
	{
		document.getElementById("orderNumberRow").style.display = '';
		document.getElementById("documentNumber").value = '';
		document.getElementById("storeLocation").value = '';
		
		document.getElementById("storeLocation").disabled=true;
		document.getElementById("documentNumber").disabled=true;
	}
	else
	{
		document.getElementById("documentNumber").value = '';
		document.getElementById("orderNumber").value = '';
		document.getElementById("storeLocation").value = '';
		
		document.getElementById("storeLocation").disabled=true;
		document.getElementById("documentNumber").disabled=true;
	}
}

//Pagination used on order history.
function submitPaginationForm(url)
{
	window.location=url;
}

//Checks to see if the contents of a text field have reached their maximum allowed length.
function ismaxlength(obj,maxLength){
	var mlength=obj.getAttribute? maxLength : "";
	if (obj.getAttribute && obj.value.length>mlength)
		obj.value=obj.value.substring(0,mlength);
}

function addDynamicScript(url)
{
	// create a new script element
	var script = document.createElement('script');
	// set the src attribute to that url
	script.setAttribute('src',  url);
	script.setAttribute("type","text/javascript");
	// insert the script in out page
	document.getElementsByTagName('head')[0].appendChild(script);
}

function addDynamicStyle(url)
{
	// create a new link element
	var style = document.createElement('link');
	// set the href attribute to that url
	style.setAttribute('href',  url);
	style.setAttribute("rel","stylesheet");
	style.setAttribute("type","text/css");
	style.setAttribute("media","screen, projection");
	// insert the link in out page
	document.getElementsByTagName('head')[0].appendChild(style);
}

function showHeaderShoppingBag(jsonData)
{
	$('#cart_flyout').setTemplateURL(ajaxConfig.headerShoppingBagTemplateUrl,null, { filter_data: false });
	$('#cart_flyout').setParam('absUrl',absUrl);
	$('#cart_flyout').processTemplate(jsonData);
	
	if (jsonData.hasData !== undefined && jsonData.hasData == "true")
	{
		if (jsonData.shoppingBagSize > 0)
		{
			$(".cart-total").html("My Cart<br/>$" + Number(jsonData.shoppingBagTotal).toFixed(2));	
			$(".cart-count").text(jsonData.shoppingBagSize);			
		}
	}
}

function showHeaderFooterData(data)
{
	var newData = getDepartmentNavigation(data);
	/*addDynamicStyle(homeServer+"/store/content/css/menu.css");*/
	$('#header').setTemplateURL(ajaxConfig.headerTemplateUrl);
	$('#header').setParam('absUrl',absUrl);
	$('#header').processTemplate(newData);
	
	$('#footer').setParam('absUrl',absUrl);
	$('#footer').setParam('endsWith',endsWith);
	$('#footer').setTemplateURL(ajaxConfig.footerTemplateUrl);
	$('#footer').processTemplate(newData);
}

function getDepartmentNavigation(jsonData)
{
	//this is a hook to add more data 
	return jsonData;
}

/**
 * This function will take an input string url and ensure it is an Absolute URL not Relative.
 * @param urlStr
 * @returns absolute url string
 */
function absUrl(urlStr)
{
	var outStr = urlStr;
	if(urlStr === undefined)
	{
		return outStr;
	}
	
	if(urlStr.length == 0)
	{
		return outStr;
	}
	
	var firstChar = urlStr.charAt(0);
	//check if string starts with "/"
	if(firstChar=="/")
	{
		//if it does, append "HomeServer" to url str.
		if(homeServer === undefined)
			outStr=urlStr;
		
		outStr=homeServer+urlStr;
	}
	else
	{
		//otherwise return original input
		outStr=urlStr;
	}
	
	return outStr;
}

function endsWith(str, suffix) {
    var bln = str.indexOf(suffix, str.length - suffix.length) !== -1;
	return bln;
}

//verifies valid gift registry number.

function verifyRegistryNumber()
{

	var giftRegistryNumber = $.trim($('#registryid').val());
	var sum = 0;
	var count1 = 0;
	var i = 0;
	
	if(isNaN(giftRegistryNumber) || giftRegistryNumber=="")
		{
		alert("Gift Registry Number must be numeric.");
		return false;
		}

	if (giftRegistryNumber.substring(0, 4) == "4800" && giftRegistryNumber.length == 12) 
	{
	
		var tempStr = reverseStr(giftRegistryNumber);
		
		for(i=0 ; i< tempStr.length ;i++)
		{
			s = new String(tempStr.charAt(i));
			if(count1 == 0)
			{
				sum = sum + (s * 1);
				count1 = 1;
			}
			else
			{
				sum = sum + (s * 3);
				count1 = 0;
			}
	   	};
	
	   	remainder = 0;
	   	remainder = (sum % 10);
	
	   	if(remainder == 0)
	   	{
	   		return true;
	   	}
	   	else
	   	{
	   		alert("Gift Registry Number is invalid.");
	   		return false;
	    }
   	
	}
	else
		{
		alert("Gift Registry Numbers begin with '4800' and must be 12 digits in length");
		return false;
		}
   	
	return true;
}	

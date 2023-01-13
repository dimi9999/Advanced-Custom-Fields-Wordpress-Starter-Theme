/* https://cfwizdemo02.azurewebsites.net/ 23 of Jun 2020 */
console.log("LOADED-v3");
/* ↓↓↓ custom prompt ↓↓↓ */
function promptFn() {
  var customPrompt = prompt("Please enter your push notification title", $('.wt-news-title').text().trim());
  if (customPrompt == null || customPrompt == "null" || customPrompt == "") {
    customPrompt = "   ";
  } 
  console.log("Reference 01");
  console.log("Custom Promt fn: " + customPrompt);
  return customPrompt;
}
/* ↑↑↑ custom prompt ↑↑↑ */

/* ↓↓↓ push notification ↓↓↓ */
function pushNotificationUpdate(e) {
	var conf = confirm("Continuing will send a push notification to all employees with the  app installed on their mobile device. Are you sure you want to continue?");
	if(conf == true) {
        var body = $('.wt-news-content').text().trim();
        body = body.replace('Page Content', '');
        var body30 = "";
        /* ↓↓↓ On 23 of Jun I (FR) added the following ↓↓↓ */
        body30 = body.substr(0,110);
        if(body30 == "..." || body30 == "" || body30 == null){
            body30 = ""
        }
        /* ↑↑↑ On 23 of Jun I (FR) added the following ↑↑↑ */
        
        /* ↓↓↓ On 23 of Jun I commented out the following because the notification body was returning null ↓↓↓ */
        /*
        if(body30 == "..." || body30 == ""){
            body30 = ""
        } else{
            body30 = body.substr(0,110);
            body30 = body30 + "...";
        }
        */
        // var pushTitle = promptFn();
        var pushTitle = promptFn();
        console.log("Body: " + body);
        console.log("Body 30: " + body30);
        StartMicrosoftFlowTriggerOperations(pushTitle);
        
        $.ajax({
            async: false,
            headers: { "accept": "application/json; odata=verbose" },
            method: "GET",
            url: "https://stw-functions.azurewebsites.net/api/CFWizdomDemoPush?code=Tt3LuncknTWp7yYdanRZbHI2xd7ZxTreaXYVllmFO/mgX05a0NnfjQ==&message=" + encodeURI(pushTitle) + "&path=" + encodeURI(window.location.href) + "&body=" + prompt("Please enter your push notification body" , body30)
         });
         console.log("Reference 03");
         $('#pnButton').prop('disabled', true);
         $("#pnButton").html('Push notification sent');
         alert("Push notification successfully sent to all devices.");
    }
}
/* ↑↑↑ push notification ↑↑↑ */

/* ↓↓↓ FLOW BLOCK ↓↓↓ */
 
// This method triggers the microsoft flow 
function StartMicrosoftFlowTriggerOperations(pushTitle) { 
     $("#flowReturn").html('Nested nested Trigerred');
     //var pageTitle = $(document).find("title").text();
     //console.log("Page Title: " + pageTitle);
    try { 
        // var dataTemplate = "{\r\n    \"emailaddress\":\"{0}\",\r\n    \"emailSubject\": \"{1}\",\r\n    \"emailBody\": \"{2}\"\r\n}"; 
        var dataTemplate = "{\r\n    \"user\":\"{0}\",\r\n    \"title\": \"{1}\"\r\n}";
        var httpPostUrl = "https://prod-122.westeurope.logic.azure.com:443/workflows/e29d58e7f0194ece9978ee8238d3d7a0/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=vXrR_H5RlwRP0gZIjoRhKKsVcGfInDi6VrAHFA32JV8"; 
        // Call FormatRow function and replace with the values supplied in input controls. 
        // dataTemplate = dataTemplate.FormatRow($("#txtEmailAddress").val(), $("#txtEmailSubject").val(), $("#txtEmailBody").val());
         
        /* ↓↓↓ SP.ClientContext ↓↓↓ */
        var context = new SP.ClientContext.get_current();
        var web = context.get_web();
        var user = web.get_currentUser(); //must load this to access info.
        context.load(user);
        context.executeQueryAsync(function(){
        console.log("User is: " + user.get_email()); // there is also id, email, so this is pretty useful.
        /* ↑↑↑ SP.ClientContext ↑↑↑*/            
            
        dataTemplate = dataTemplate.FormatRow(user.get_email(), pushTitle);
         
         var settings = { 
            "async": true, 
            "crossDomain": true, 
            "url": httpPostUrl, 
            "method": "POST", 
            "headers": { 
                "content-type": "application/json", 
                "cache-control": "no-cache" 
            }, 
            "processData": false, 
            "data": dataTemplate 
        } 
        $.ajax(settings).done(function (response) { 
            console.log("Successfully triggered the Microsoft Flow. "); 
            console.log(response)
        }); 
            
            
        }, function(){});
        
        /* */
        
    } 
    catch (e) { 
        console.log("Error occurred in StartMicrosoftFlowTriggerOperations " + e.message); 
    } 
}

 
//This method formats the rowTemplate by replacing the placeholders based on the arguments passed. 
String.prototype.FormatRow = function () { 
    try { 
        var content = this; 
        for (var i = 0; i < arguments.length; i++) { 
            var replacement = '{' + i + '}'; 
            content = content.replace(replacement, arguments[i]); 
        } 
        return content; 
    } 
    catch (e) { 
        console.log("Error occurred in FormatRow " + e.message); 
    }
 }

/* ↑↑↑ FLOW BLOCK ↑↑↑ */

function isCurrentUserMemberOfGroup(groupName) {
    var userIsInGroup = false;
    $.ajax({
        async: false,
        headers: { "accept": "application/json; odata=verbose" },
        method: "GET",
        url: _spPageContextInfo.webAbsoluteUrl + "/_api/web/currentuser/groups",
        success: function (data) {
            data.d.results.forEach( function (value) {
                if (value.Title == groupName) {               
                     userIsInGroup = true;
                }
            });
        },
        error: function (response) {
            console.log(response.status);
        },
    });    
    return userIsInGroup;
}

$(document).ready(function () {
    if(window.location.href.indexOf("/News/Pages/") > -1) {
        //var isPN = isCurrentUserMemberOfGroup("OnTap Corp News Push Notification Access");
        var isPN = 1;
        if(isPN > 0)
        {
            $('.news-info-container').prepend('<p><button id="pnButton" class="btn btn-primary" type="button" onclick="javascript:pushNotificationUpdate()">Send push notification to all devices</button></p>');
        }
    }
});

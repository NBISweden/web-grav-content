---
title: Events
visible: true
media_order: 'clipboard.js,CMOS.js,cpux86-ta.js,cpux86-ta.original.js,index.html,jslinux.js,KBD.js,linuxstart-20110820.tar.gz,PCEmulator.js,PIC.js,PIT.js,Serial.js,term.js,IMG20220116182418.jpg'
---

# Search
Trying out the search function.

# Image formatting
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

![IMG20220116182418](IMG20220116182418.jpg?classes=float-left&resize=200,200 "Where does this go?")

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

![IMG20220116182418](IMG20220116182418.jpg?classes=float-right&resize=200,200 "Where does this go?")

# Calendar integration

<!-- For google calendar integration -->
<script src="https://cdn.jsdelivr.net/npm/moment@2/moment.min.js"></script>
<script src="https://apis.google.com/js/api.js"></script>


<script>
    /* This solution makes u se of "simple access" to google, providing only an API Key.
    * This way we can only get access to public calendars. To access a private calendar,
    * we would need to use OAuth 2.0 access.
    *
    * "Simple" vs. "Authorized" access: https://developers.google.com/api-client-library/javascript/features/authentication
    * Examples of "simple" vs OAuth 2.0 access: https://developers.google.com/api-client-library/javascript/samples/samples#authorizing-and-making-authorized-requests
    *
    * We will make use of "Option 1: Load the API discovery document, then assemble the request."
    * as described in https://developers.google.com/api-client-library/javascript/start/start-js
    */
    function printCalendar() {
        // The "Calendar ID" from your calendar settings page, "Calendar Integration" secion:
        var calendarId = 'en.swedish#holiday@group.v.calendar.google.com';

        // 1. Create a project using google's wizzard: https://console.developers.google.com/start/api?id=calendar
        // 2. Create credentials:
        //    a) Go to https://console.cloud.google.com/apis/credentials
        //    b) Create Credentials / API key
        //    c) Since your key will be called from any of your users' browsers, set "Application restrictions" to "None",
        //       leave "Website restrictions" blank; you may optionally set "API restrictions" to "Google Calendar API"
        var apiKey = 'AIzaSyD6QEIJ9pcMSXrL6uQ7qVcx9JgG-ORr7DQ';
        // You can get a list of time zones from here: http://www.timezoneconverter.com/cgi-bin/zonehelp
        var userTimeZone = "Europe/Budapest";

        // Initializes the client with the API key and the Translate API.
        gapi.client.init({
            'apiKey': apiKey,
            // Discovery docs docs: https://developers.google.com/api-client-library/javascript/features/discovery
            'discoveryDocs': ['https://www.googleapis.com/discovery/v1/apis/calendar/v3/rest'],
        }).then(function () {
            // Use Google's "apis-explorer" for research: https://developers.google.com/apis-explorer/#s/calendar/v3/
            // Events: list API docs: https://developers.google.com/calendar/v3/reference/events/list
            return gapi.client.calendar.events.list({
                'calendarId': calendarId,
                'timeZone': userTimeZone,
                'singleEvents': true,
                'timeMin': (new Date()).toISOString(), //gathers only events not happened yet
                'maxResults': 20,
                'orderBy': 'startTime'
            });
        }).then(function (response) {
            if (response.result.items) {
                var calendarRows = ['<table class="wellness-calendar"><tbody>'];
                response.result.items.forEach(function(entry) {
                    var startsAt = moment(entry.start.dateTime).format("L") + ' ' + moment(entry.start.dateTime).format("LT");
                    var endsAt = moment(entry.end.dateTime).format("LT");
                    calendarRows.push(`<tr><td>${startsAt} - ${endsAt}</td><td>${entry.summary}</td></tr>`);
                });
                calendarRows.push('</tbody></table>');
                $('#wellness-calendar').html(calendarRows.join(""));
            }
        }, function (reason) {
            console.log('Error: ' + reason.result.error.message);
        });
    };

    // Loads the JavaScript client library and invokes `start` afterwards.
    gapi.load('client', printCalendar);
</script>

<div id="wellness-calendar"></div>



# DataTables

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>



<script>
var dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
    [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
    [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
    [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
    [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
    [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
    [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
    [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
    [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
    [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
    [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
    [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
    [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
    [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
    [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
    [ "Doris Wilder", "Sales Assistant", "Sydney", "3023", "2010/09/20", "$85,600" ],
    [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
    [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
    [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
    [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
    [ "Michelle House", "Integration Specialist", "Sydney", "2769", "2011/06/02", "$95,400" ],
    [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
    [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
    [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
    [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
];
 
$(document).ready(function() {
    $('#example').DataTable( {
        data: dataSet,
        columns: [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." },
            { title: "Start date" },
            { title: "Salary" }
        ]
    } );
} );
</script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<table id="example" class="display" width="100%"></table>


# JSLinux
<style>
.term {
    font-family: courier,fixed,swiss,monospace,sans-serif;
    font-size: 14px;
    color: #f0f0f0;
    background: #000000;
}
.termReverse {
    color: #000000;
    background: #00ff00;
}
#note {
    font-size: 12px;
}
#copyright {
    font-size: 10px;
}
#clipboard {
    font-size: 12px;
}
</style>
</head>
<body onload="load_binaries()">
<table border="0">
<tr valign="top"><td>
<script type="text/javascript" src="events/term.js"></script>
<script type="text/javascript" src="events/cpux86-ta.js"></script>
<script type="text/javascript" src="events/Serial.js"></script>
<script type="text/javascript" src="events/PIT.js"></script>
<script type="text/javascript" src="events/PIC.js"></script>
<script type="text/javascript" src="events/CMOS.js"></script>
<script type="text/javascript" src="events/KBD.js"></script>
<script type="text/javascript" src="events/clipboard.js"></script>
<script type="text/javascript" src="events/PCEmulator.js"></script>
<script type="text/javascript" src="events/jslinux.js"></script>
<div id="copyright">&copy; 2011 Fabrice Bellard - <a href="news.html">News</a> - <a href="faq.html">FAQ</a> - <a href="tech.html">Technical notes</a></div>
<td><input type="button" value="Clear clipboard" onclick="clear_clipboard();"><br><textarea row="4" cols="16" id="text_clipboard"></textarea>
</table>






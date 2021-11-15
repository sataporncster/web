function userClicked(name){

var url ="https://docs.google.com/spreadsheets/d/1Z515JMQ0y4jNxTpFLfOZ7W9nPHK0cDVmg9gytFjRMWM/edit#gid=0";
var ss = SpreadsheetApp.openByUrl(url);
var ws =ss.getSheetByName("DATA");

ws.appendRow([name,new Date]);
}

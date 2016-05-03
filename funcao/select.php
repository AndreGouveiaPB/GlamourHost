<script type="text/javascript">
var capsdb = new Object()

capsdb["manha"] =
[{value:"8:00", text:"8:00"},
{value:"8:30", text:"8:30"},
{value:"9:00", text:"9:00"},
{value:"9:30", text:"9:30"},
{value:"10:00", text:"10:00"},
{value:"10:30", text:"10:30"},
{value:"11:00", text:"11:00"},
{value:"11:30", text:"11:30"},
{value:"12:00", text:"12:00"},
{value:"12:30", text:"12:30"}];

capsdb["tarde"] =
[{value:"13:00", text:"13:00"},
{value:"13:30", text:"13:30"},
{value:"14:00", text:"14:00"},
{value:"14:30", text:"14:30"},
{value:"15:00", text:"15:00"},
{value:"15:30", text:"15:30"},
{value:"16:00", text:"16:00"},
{value:"16:30", text:"16:30"},
{value:"17:00", text:"17:00"},
{value:"17:30", text:"17:30"}];

capsdb["noite"] =
[{value:"18:00", text:"18:00"},
{value:"18:30", text:"18:30"},
{value:"19:00", text:"19:00"},
{value:"19:30", text:"19:30"},
{value:"20:00", text:"20:00"}];



function setNumber(chooser) {
var newElem;
var where = (navigator.appName == "Microsoft Internet Explorer") ? -1 : null;
var numberChooser = chooser.form.elements["horario"];
while (numberChooser.options.length) {
numberChooser.remove(0);
}
var choice = chooser.options[chooser.selectedIndex].value;
var db = capsdb[choice];
newElem = document.createElement("option");
newElem.text = "Escolha o Horário:";
newElem.value = "";
numberChooser.add(newElem, where);
if (choice != "") {
for (var i = 0; i < db.length; i++) {
newElem = document.createElement("option");
newElem.text = db[i].text;
newElem.value = db[i].value;
numberChooser.add(newElem, where);
}
}
}


</script>
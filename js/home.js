
function onSubminHome() {
    selectSheetData();
        alert("your movie ticket booked");
        location.reload();
        
};
function selectSheetData() {
    var formData1 = jQuery("#homeForm").serializeArray();
    var formData = JSON.stringify(formData1);


    var hxr = new XMLHttpRequest();

    hxr.open('GET', '../php/home.php?formData1=' + formData, true);

    hxr.onload = () => {
        console.log(hxr.responseText);
    };
    hxr.send();
};
function singOut() {
    var hxr = new XMLHttpRequest();

    hxr.open('GET', '../php/singOut.php', true);
    hxr.send();

};
function registerSheetIsCheched() {
    var hxr = new XMLHttpRequest();

    hxr.open('GET', '../php/sheetIdData.php', true);
    // hxr.responseType = 'json';
    hxr.onload = () => {
        var sheetId = hxr.responseText;
        var sheet = JSON.parse(sheetId);
        for (let i = 0; i < sheet.length; i++) {
            let sheetId = sheet[i];
            document.getElementById(sheetId).checked = true;
        };


    };
    hxr.send();


};
registerSheetIsCheched();

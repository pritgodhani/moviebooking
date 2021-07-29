var xhr = new XMLHttpRequest();
xhr.open('Get','../php/admindata.php',true);
xhr.onload = function(){
    var admin_Data = xhr.responseText;
    var adminData = JSON.parse(admin_Data);
   //  console.log(adminData);
    table(adminData);
   //  search(adminData);
}
xhr.send();
function table(data){
   var adminData = data;
   for(var i = 0;i<adminData.length;i++){
      var array = adminData[i];
      var table = document.getElementById('tbody');
      table.innerHTML += `
      <tr>
      <td>${i+1}</td>
      <td>${array.name}</td>
      <td>${array.email}</td>
      <td>${array.sheet_name}</td>
    </tr>`;
     
   }

};
$(document).ready(function(){
   $("#search").on("keyup", function() {
     var value = $(this).val().toLowerCase();
     $("#tbody tr").filter(function() {
       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
     });
   });
 });


document.getElementById("btn-refresh").addEventListener("click",UpdateTable);

function UpdateTable()
{
fetch('db/get_users.php')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
      console.log(data);
        var tbody = document.getElementById('tbody');
        while ( tbody.rows[0] ) {
            tbody.deleteRow(0);
            }
        for (var i = 0; i < Object.keys(data).length; i++) {
            var tr = "<tr>";
            tr += "<td>" + data[i].username + "</td>" + "<td>" + data[i].id.toString() + "</td></tr>";
            tbody.innerHTML += tr;
        };
  });
}
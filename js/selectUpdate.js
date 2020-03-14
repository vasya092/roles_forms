let input = document.getElementById("userRoleId"); 
let popup = document.getElementById("popup");
let select = document.getElementById("select-role");

function removeOptions(selectbox) {
    let i;
    for (i = selectbox.options.length - 1; i >= 0; i--) {
      selectbox.remove(i);
    }
}

const buildSelectList = data => 
{
    data.forEach(data => {
      let option = new Option(data.rolename, data.id, false, true);
      select.appendChild(option);
    });
    let blankOption = new Option("Select role", 12, false, true);
    select.insertBefore(blankOption, select.firstChild);
};
  
window.onclick = function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
};
  input.onfocus = function() {
    removeOptions(select);
  
    fetch("db/get_roles.php")
      .then(res => res.json())
      .then(data => buildSelectList(data));
      popup.style.display = "block";
  };
 

select.addEventListener("change", function() {
    select.dataset.role = select.options[select.selectedIndex].value;
    document.getElementById("userRoleId").value = select.options[select.selectedIndex].text;
    popup.style.display = "none";
})

  
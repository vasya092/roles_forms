document.getElementById("btn-send-role").addEventListener("click", roleUpdate, false);

function roleUpdate(){
    let roleName = document.getElementById('user-role').value;
    fetch('db/update_roles.php', {
        method: "post",
        headers: {
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body: 'rolename='+roleName
    }).then(response => {
        document.getElementById("result").textContent="Roletype added";
    });
}
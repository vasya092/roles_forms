document.getElementById("btn-send-user").addEventListener("click", userUpdate, false);

function userUpdate(){
    let username = document.getElementById("user-name").value;
    let userRoleId = document.getElementById("select-role").dataset.role;
    fetch('db/update_users.php', {
        method: "post",
        headers: {
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body: 'username='+username+'&roleid='+userRoleId
    }).then(response => {
        let result = document.getElementById("result");
        result.setAttribute('style','visibility:visible');
        setTimeout(() => result.setAttribute('style','visibility:hidden'), 1500);
        document.getElementById("result").textContent="User added";
    });
}
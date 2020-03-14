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
        let result = document.getElementById("result");
        result.setAttribute('style','visibility:visible');
        setTimeout(() => result.setAttribute('style','visibility:hidden'), 1500);
        document.getElementById("result").textContent="Roletype added";
    });
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Work</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <div class="role-form form-frame">
            <form id="roleForm" onsubmit="return false;">
                <input type="text" name="userRole" id="user-role" placeholder="User role">
                <input type="button" id="btn-send-role" class="btn" value="Add role">
            </form>
        </div>           
        <div class="user-form form-frame">
            <form>
                <input name="userRoleId" id="userRoleId" class="input-user" autocomplete="off"  placeholder="Role"/>
                <input type="text" name="userName" id="user-name" class="input-user" placeholder="User name"/>
                <input type="button" id="btn-send-user" class="btn" value="Add user">
            </form>
        </div>
        <div id="popup">
                    <select id="select-role" data-role="0">
                        <option>Select Role</option>
                    </select>
                </div>
        <div id="table-place">
        <input type="button" id="btn-refresh" class="btn" value="Refresh table">
        <table>
            <tbody id="tbody"></tbody>
        </table>
        </div>
        <div id="result"></div>    
    </body>
    <footer>
        <script src="js/roleForm.js"></script>        
        <script src="js/userForm.js"></script>
        <script src="js/selectUpdate.js"></script>
        <script src="js/table.js"></script>
        <script>UpdateTable();</script>
    </footer>
</html>
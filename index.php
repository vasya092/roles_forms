<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Work</title>
    <link rel="stylesheet" href="styles.css">
</head>
    <body>
        <form id="roleForm" onsubmit="return false;">
            <input type="text" name="userRole" id="user-role" placeholder="User role">
            <input type="button" id="btn-send-role" value="Add role">
        </form>
        <div id="result"></div>       
        <form>
            <input name="userRoleId" id="userRoleId" autocomplete="off"  placeholder="Role"/>
            <input type="text" name="userName" id="user-name" placeholder="User name"/>
            <input type="button" id="btn-send-user" value="Add user">
            <div id="popup">
                <select id="select-role" data-role="0">
                    <option>Select Role</option>
                </select>
            </div>
        </form>
        <input type="button" id="btn-refresh" value="Refresh table">
        <div id="table-place">
        <table>
            <tbody id="tbody"></tbody>
        </table>
        </div>
    </body>
    <footer>
        <script src="js/roleForm.js"></script>        
        <script src="js/userForm.js"></script>
        <script src="js/selectUpdate.js"></script>
        <script src="js/table.js"></script>
        <script>UpdateTable();</script>
    </footer>
</html>
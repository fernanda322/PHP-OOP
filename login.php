<?php
    

    if($_POST) include 'action.php'; 
?>
<!DOCTYPE HTML>
<html><center>
    <head>
        <title>Login SPP</title>
    </head>
    <body>
    <h1>Login data SPP</h1>
        <form method="post" action="login.php">
            <table border=1>
          
            <tr>
                <div class="input">
                 <td>
                    <label for="username">Username (NISN) </label>
                  </td>
            
                 <td>
                     <input type="text" id="username" name="username">
                 </td>
        </div>            
            </tr>
                 <tr>
                 <div class="input">
              <td>
               <label for="pass">Password (NIS) </label>
                </td>
              
             <td>
                <input type="password" id="pass" name="password">
            </td>
        </div>            
        </tr> 
        <tr>
            <div class="input">
            <td>            
                <label for="user">Level</label>
            </td>
            
            <td>
                <select id="user" name="user">
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                    <option value="siswa">Siswa</option>
                </select>
            </td>
            </div>            
            </tr>
    </table>
    <br>
        <input type="submit" name="login">            
        </form>
    </body>
</html>
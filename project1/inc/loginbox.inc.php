<table width="100%" height="100%">
  <tr>
    <td align="center">
      <table width="350" align="center" border="0" cellpadding="2" bgcolor="#FFFFCE" class="ThinBorder">
      <form action="login.php" method="post">
      <tr>
        <td>Username: </td>
        <td><input type="text" name="user" size="40"></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td><input type="password" name="pass" size="40"></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          Remember Login: <input type="checkbox" name="rem" value="1" checked>
        </td>
      </tr>   
      <tr>
        <td colspan="2" align="center">
          <input type="submit" name="submit" value="Login">
          <input type="hidden" name="token" value="<?php echo $token;?>">
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
        <p align="center">PHPLogin Version 0.0.1 by <a href="mailto:nathan.stier@gmail.com">Nathan Stier</a></p>
        </td>
      </tr>
      </form>
      </table>
    </td>
    </tr>
  </table>
  </body>
  </html>

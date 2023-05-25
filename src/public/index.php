<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>sample</title>
  </head>
  <body>
    <form action="complete.php" method="post" style="display: flex">
      <table>
            <th>予約者名</th>
            <td><input type="text" name="name" placeholder="予約者名" size="10" value="" /></td><br />
          </tr>

            <th>Email</th>
            <td><input type="text" name="email" placeholder="Email" size="10" value="" /></td><br />
          </tr>

            <th>電話番号</th>
            <td><input name="phone_number" type="tel" name="tel" placeholder="電話番号" size="10" value="" inputmode="tel"></td><br />
          </tr>
        <br />
          <td><input type="submit" value="送信" /></td>
        </tr>
      </table>
    </form>
  </body>
</html>


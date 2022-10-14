<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
  </head>
  <body>
    <div class="container">
      <?php
        include 'components/header.php';
        include 'components/user.php';

        $request = 'SELECT * FROM `contacts`';
        $sql = mysqli_query($link, $request);
      ?>
      <main>
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>имя</th>
              <th>номер</th>
              <th>данные</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while ($result = mysqli_fetch_array($sql)) {
                echo "<tr>
                  <td>{$result['id']}</td>
                  <td>{$result['name']}</td>
                  <td>{$result['tel']}</td>
                  <td>{$result['data']}</td>
                </tr>";
              };
             ?>
          </tbody>
        </table>
      </main>
    </div>
  </body>
</html>

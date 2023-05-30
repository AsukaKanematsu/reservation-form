<?php

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone_number = filter_input(INPUT_POST, 'phone_number');

$errors = [];
if (empty($name) || empty($email) || empty($phone_number)) {
    $errors[] = '「予約者名」「Email」「電話番号」のどれか記入されていません!';
}

if (!empty($name) && !empty($email) && !empty($phone_number)) {
    $dbUserName = 'root';
    $dbPassword = 'password';
    $pdo = new PDO(
        'mysql:host=mysql; dbname=bookingform; charset=utf8',
        $dbUserName,
        $dbPassword
    );

    $sql =
        'INSERT INTO `bookings` (`name`, `email`, `phone_number`) VALUES (:name, :email, :phone_number)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':name', $name, PDO::PARAM_STR);
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->bindValue(':phone_number', $phone_number, PDO::PARAM_STR);
    $statement->execute();
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>sample</title>
</head>

<body>
  <div>
    <?php if (!empty($errors)): ?>
      <?php foreach ($errors as $error): ?>
        <p><?php echo $error . "\n"; ?></p>
        <?php endforeach; ?>
        <a href="index.php">予約画面へ</a>
    <?php endif; ?>
    
    <?php if (empty($errors)): ?>
      <h2>予約完了＾＾</h2>
      <a href="index.php">予約画面へ</a><br><br>
    <?php endif; ?>
  </div>

</body>
    
</html>
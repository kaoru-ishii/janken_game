<?php

$title = 'あなたが出す手を選び、コンピューターと勝負してください。';

$hands = ['グー！', 'チョキ！', 'パー！'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ジャンケン</title>
</head>

<body>
    <h1>じゃんけん！</h1>
    <h2><?php echo $title; ?></h2>
    <form method="POST" action="result.php">
        <?php foreach($hands as $hand) { ?>
            <input name="player_hand" required type="radio" value="<?php echo $hand; ?>"><?php echo $hand; ?>
            <br>
        <?php } ?>
        <br>
        <button type="submit">勝負する！</button>
    </form>
</body>
</html>

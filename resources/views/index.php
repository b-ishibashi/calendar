<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>カレンダー</h1>
    <div class="book-form">
        <table>
            <thead>
                <caption>
                    2019 4
                </caption>
            </thead>
            <tbody>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sun</th>
                </tr>
                <?php foreach ($month as $week): ?>
                    <tr>
                        <?php foreach ($week as $date): ?>
                            <td><a href="#"><?=h($date)?></a></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

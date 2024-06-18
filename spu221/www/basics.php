<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <h1>Основы РНР</h1>
    <h2>общие характеристики</h2>
    <ul>
        <li>Поколения: 4GL</li>
        <li>Тип: REPL (интерпритатор)</li>
        <li>Парадигма: мульти (процедурна, ООП)</li>
        <li>Синтаксическая группа: мульти (поддержка большинства стилей)</li>
    </ul>
    <h2>переменные и типы данных</h2>
    <p>
        Имена переменных начинаються с символа $. Обьявления переменных
        не требуется, переменная появляется путем первого присвоения
        Типизация динамическая (как у JS).У HTML PHP вставля5ется через конструкцию
        <code>&lt;?php ?&gt;</code>
    </p>
    <?php $x=10;?>
    <p>
        Вывод данных: или конструкци. &lt;?=$x ?&gt; <?=$x ?>,
        или оператором <code>echo</code> <?php echo $x; ?>
    </p>
    <p>Так как типизация динамическая, существует большое количество операций
        <code>is_...</code>
        <ul>
            <li><code>is_array</code>:<?=is_array($x) ? "+":"-"?> </li>
            <li><code>is_bool</code>:<?=is_bool($x) ? "+":"-"?> </li>
            <li><code>is_string</code>:<?=is_string($x)?> </li>
            <li><code>is_int</code>:<?=var_export(is_int($x),true) ?> </li>
            <li><code>is_callable</code>:<?=var_export(is_callable($x),true) ?> </li>
        </ul>
        а также <code>isset( var )</code>
        <ul>
        <li><code>isset( $x )</code>:<?=isset($x)?"+":"-"?></li>
        <li><code>isset( $y )</code>:<?=isset($y)?"+":"-"?></li>
        <li><code>is_finite( $y )</code>:<?=is_finite($y)?"+":"-"?></li>
        </ul>
    </p>
    <h2>инструкция управления (условия и циклы)</h2>
    <p>
        условные операторы: <code>if,switch</code>, тернарный выраз.
        цикловые операторы: <code>for, while, do-while, foreach</code>
        масивы: похожие на идею обьектов у JS - асоциативные конструкции
        формата [ключь =>значение]
    </p>
    <?php
$arr=[
'x' =>10,
'y' =>20
];
$index_arr =['a','b','c','s'];
    ?>
    Пример работы <code>foreach</code>
    <?php foreach($arr as $k =>$v) : ?>
    <p><?=$k?>&Rarr;<?=$v?></p>
    <?php endforeach ?>
    
    <table>
        <thead>
            <tr>
                <th>Ключ</th>
                <th>Значение</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($index_arr as $k => $v) : ?>
            <tr>
                <td><?=$k?></td>
                <td><?=$v?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
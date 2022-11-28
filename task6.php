<?php
/**
 * Задание #6

Используя цикл for, выведите таблицу умножения размером 10x10. Таблица должна быть выведена с помощью HTML тега <table>.
Если значение индекса строки и столбца чётный, то результат вывести в круглых скобках.
Если значение индекса строки и столбца Нечётный, то результат вывести в квадратных скобках.
Во всех остальных случаях результат выводить просто числом.
 */

echo '<table style="border: 1px solid black; border-collapse: collapse;">';
for ($a = 1; $a <= 10; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 10; $b++) {
        $result = $a * $b;

        echo '<td style="border: 1px solid black; border-collapse: collapse;">';
        if ($a % 2 == 0 && $b % 2 == 0) {
            echo "($result)";
        } elseif ($a % 2 !== 0 && $b % 2 !== 0) {
            echo "[$result]";
        } else {
            echo $result;
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</<table>';
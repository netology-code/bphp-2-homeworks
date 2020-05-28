# Задание №2 - Поиск уникальных записей в файле

## Легенда
Часто необходимы скрипты для автоматизации обработки файлов. Вы можете автоматизировать рутинные или сложные задачи при помощи PHP скриптов.

## Техническое задание:
Изучите следующие функции:
[explode](https://www.php.net/manual/ru/function.explode.php)
[in_array](https://www.php.net/manual/ru/function.in-array.php)
[array_key_exists](https://www.php.net/manual/ru/function.array-key-exists.php)
[array_push](https://www.php.net/manual/ru/function.array-push.php)
[array_unique](https://www.php.net/manual/ru/function.array-unique.php)
[count](https://www.php.net/manual/ru/function.count.php)

Необходимо написать скрипт, он должен:
1. При помощи stdin он должен принимать на вход содержимое файла.
1. Получить содержимое файла.
1. Посчитать количество уникальных строк.

## Пример содержимого файла:
```
Иванов
Сидоров
Петров
Иванов
Сидорова
```

## Рекомендации по выполнению:
Оптимально использовать ассоциативный массив и в качестве ключа использовать данные из файла. Так алгоритм будет более быстрым.

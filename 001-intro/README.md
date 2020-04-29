# Домашнее задание к занятию «1.1. Знакомство с PHP»

## Задание №1 - Подготовка рабочей среды.

Вы пришли на новое место работы или приобрели новый компьютер.
Первым делом надо настроить окружение для дальнейшей работы. 

1. Установить PHPStorm: [https://www.jetbrains.com/ru-ru/phpstorm/download/](https://www.jetbrains.com/ru-ru/phpstorm/download/).
1. Ключ для активации получить у куратора курса.  
1. Установить плагины:
    - Php Inspections для подсветки неоптимальных участков кода и предложений об улучшении,
    - PHP Annotations для поддержки комментариев в стиле phpdoc.

## Задание №2 - Знакомство с документацией.
Помнить все особенности языка конечно можно, но это приходит с опытом. 
Хороший специалист всегда может быстро найти необходимую документацию. 
Поэтому после каждого занятия крайне желательно знакомиться с оригинальной документацией, что бы когда надо будет 
что-то подсмотреть знать где найти нужную информацию. 
* [Типы данных](https://www.php.net/manual/ru/language.types.php)
* [if](https://www.php.net/manual/ru/control-structures.if.php)
* [else](https://www.php.net/manual/ru/control-structures.else.php)
* [elseif](https://www.php.net/manual/ru/control-structures.elseif.php)

## Задание №3 - Определение типа переменной.

## Легенда:
Нередко требуется проверить тип переменной.

Для этого есть определенные функции.
Например, для проверки, является ли переменная булевой, используется функция `is_bool`.
```php=
<?php
$booleanVar = false;

if (is_bool($booleanVar)) {
    echo "bool";
} else {
    echo "not bool";
};

// -> bool
```

## Техническое задание
Напишите алгоритм, который определяет тип переменной используя функции 
[`is_bool`](https://secure.php.net/manual/ru/function.is-bool.php),  
[`is_float`](https://secure.php.net/manual/ru/function.is-float.php), 
[`is_int`](https://secure.php.net/manual/ru/function.is-int.php), 
[`is_string`](https://secure.php.net/manual/ru/function.is-string.php), 
[`is_null`](https://secure.php.net/manual/ru/function.is-null.php).

## Пример входных и выходных данных:
_Input:_ `$variable`, принимающая различные значения, например: `1`,`'one'`, `true`, `3.14`, `null`.
_Output:_ Программный код должен выводить одно из следующих значений:
* для переменных типа bool алгоритм должен сообщать _bool_.
* для переменных типа float алгоритм должен сообщать _float_.
* для переменных типа int алгоритм должен сообщать _int_.
* для переменных типа string алгоритм должен сообщать _string_.
* для переменных типа null алгоритм должен сообщать _null_.
* для переменных типов Array, Object, Resource, алгоритм должен сообщать _other_

Для тестирования _other_ можно использовать следующее значение переменной: `[]`

## Рекомендации по выполнению
Используйте `if..elseif` для ветвления алгоритма.
Пример выполнения:
```php=
<?php
$variable = 3.14;
// $variable = 3;
// $variable = 'one';
// $variable = true;
// $variable = null;
// $variable = [];

//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

echo "type is $type"
?>
```

## Дополнительно, по желанию
Реализуйте то же самое, но при помощи `switch-case`, например можно использовать такой подход:
```php=
<?php
$variable = 3.14;

switch (true) {
    case ...(...):
        $type = ...
        break;
    ...
    default:
        ... 
}

echo "type is $type"
?>

```

**Обратите внимание на** [**рекомендации по сдаче домашнего задания**](../homework.md).
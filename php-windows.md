# Установка PHP для Windows
1. Скачать с [официального сайта](https://windows.php.net/download/) последнюю версию PHP.
1. Распаковать архив в корень диска `С` или в любой другой каталог. 
1. Каталог с распакованными файлами желательно назвать `PHP`.
1. Найти в получившемся каталоге файл `php.ini-development` и переименовать его в `php.ini`.
1. Прописать путь (скорее всего, это будет `c:\php\bin\php`) до исполняемого файла PHP в PhpStorm.
  ![](pic/phpstorm-php.png)
1. Прописать путь до PHP в переменные среды. [Подробнее](https://www.php.net/manual/ru/faq.installation.php#faq.installation.addtopath). 

[Как это сделать в Windows 10](https://www.youtube.com/watch?v=mqIgUbpSz_A). 

Также можно воспользоваться готовым комбайном [XAMPP](https://www.apachefriends.org/ru/download.html). 

# Включение mbstring для Windows
Открыть файл php.ini в текстовом редакторе и заменить строку `;extension=mbstring` строкой `extension=php_mbstring.dll`.

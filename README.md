The Simplest Chat With Rooms Ever :)

Как запустить?

--- Окружение
// Dev
В environments/dev/common/config/main-locla.php поменяйте название, имя пользователя и пароль от БД.
Запустите команду php init в корневой директории и выберите 0 (напишите), нажмите Enter.

// Prod
В environments/prod/common/config/main-locla.php поменяйте название, имя пользователя и пароль от БД.
Запустите команду php init в корневой директории и выберите 1 (напишите), нажмите Enter.

Отвечайте на всех вопросах Yes (или после первого, All).
Следите за тем, чтобы у вас было permission для записи.


--- Миграция
php yii migrate


--- Напонение таблицы user и room
php yii user/create-all
php yii root/create-all


--- Потраченное время
Переходите по ссылку.
https://314811.selcdn.ru/movie/upload/83674925_187009072671389_4604422863657631744_n.png


--- Проект на продакшене
Переходите по ссылку.



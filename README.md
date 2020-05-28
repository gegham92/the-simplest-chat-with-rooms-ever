The Simplest Chat With Rooms Ever :)

Как запустить?

--- Клонирование репозиторий

git init

git remote add origin https://github.com/gegham92/the-simplest-chat-with-rooms-ever.git

composer install




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






--- Наполнение таблицы user и room

php yii user/create-all

php yii root/create-all







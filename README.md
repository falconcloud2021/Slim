# Slim
Проект на РНР с использованием фреймворка Slim. 
Пользовательская часть:
Проект - это сайт с главной страницей с выводом номера сессии + логином/регистрацией/сбросом с отсылкой кода на email пароля пользователя и админ панелью.
Реализовано создание сессии в middleware и проверка на наличие сессии, создание новой сессии.
Панель администратора:
Это страница логина + 2 страницы.
1-я - Dashboard страница, где доступен просмотр пользователей (jquery datatable) и реализовано их удаление ajax запросами.
2-я - Sessions страница с сессиями (в сессии доступен ip откуда зашли и т.д + флаг о том залогинен пользователь или нет).

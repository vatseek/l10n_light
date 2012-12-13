[![Build Status](https://travis-ci.org/stfalcon-studio/ls-plugin_l10n.png?branch=master)](https://travis-ci.org/stfalcon-studio/ls-plugin_l10n)

ОПИСАНИЕ
--------

Плагин «L10n» предназначен для добавления мультиязычности

* Возможность выбора языка интерфейса при регистрации пользователя и его последующая смена в настройках пользователя;
* При публикации записи указывается её язык;
* При создании и редактировании блога можно задавать название блога, его описание и url на разных языках;
* Возможность создавать и просматривать переводы для записей;
* Отдельные языковые версии сайта для каждого языка (например: http://cookorama.net/ru или http://cookorama.net/uk).
  При просмотре отдельной языковой версии сайта выводятся записи только на языке этой версии
  (аналогично в топе, блоке последней активности, облаке тегов и т.д.). Основная версия сайта остается без изменений
  (публикуются только топики-оригиналы);
* Определение языка по базе GeoIP Lite
* Соместимость с плагом Sitemap v0.3.0. Сайтмапы для разных языковых версий лежат в поддиректориях (например:
  http://cookorama.net/ru/sitemap.xml и http://cookorama.net/uk/sitemap.xml)


Для установки и правильной работы плагина прочтите пожалуйста INSTALL.txt


ЛИЦЕНЗИИ
--------

Файлы в этом архиве распостраняются по лицензии GNU GPL. Вы можете найти копию
этой лицензии в файле LICENSE.txt.


ИСТОРИЯ ВЕРСИЙ
--------------

v0.4.0
- Добавлена поддержка LS v1.0.1

v0.3.1
- Исправены ошибки при переводе
- Это последняя версия, которая работает с LiveStreet v0.5.1. Скачать её можно по ссылке https://github.com/stfalcon-studio/ls-plugin_l10n/zipball/ls-v0.5.1

v0.3.0
- Добавлена поддержка LS v0.5.1

v0.2.1
- Релиз плагина


FAQ:
-------------------------------

> Как создать перевод?

При просмотре топика нужно кликнуть на ссылку "Добавить перевод" (в сайбаре) и при создании перевода указать необходимый язык.
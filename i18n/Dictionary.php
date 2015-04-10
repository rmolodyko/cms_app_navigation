<?php
namespace samson\cms\web\navigation;

use samsonphp\i18n\IDictionary;

class Dictionary implements IDictionary
{
    public function getDictionary()
    {
        return array(
            "en"	=>array(
                "Структура материалов"	=>	"Material Structure",
                "Элемент структуры сайта" => "Site structure element",
                "Закрыть форму" => "Close form",
                "Создание" => "Create",
                "ЭСС" => "SSE",
                "Редактирование" => "Editing",
                "Структура не может быть удалена" => "Structure can't be deleted",
                "*Системная структура" => "*System structure",
                "Родитель" => "Parent",
                "Тип структуры" => "Structure type",
                "Стандартная структура" => "Standard structure",
                "Структура подчиненных материалов" => "Subordinated materials structure",
                "Структура таблицы" => "Table structure",
                "Наименование" => "Name",
                "Сгенерировать" => "Generate",
                "Создать материал для структуры" => "Create this structure material",
                "Открыть материал по умолчанию" => "Open default material",
                "Редактировать структуру" => "Edit structure",
                "Добавить новый элемент структуры сайта" => "Add new site structure element",
                "Добавить" => "Add",
                "Отмена" => "Cancel",
                "Сохранить элемент структуры сайта" => "Create site structure element",
                "Полей на данный момент - нет" => "There are no fields currently",
                "Редактировать поле элемента структуры сайта" => "Edit site structure element field",
                "Удалить поле элемента структуры сайта" => "Delete site structure element field",
                "Что нового в структуре сайта" => "What's new in site structure",
                "Перейти к структуре сайта" => "Go to site structure",
                "от" => "by",
                "Новый ЭСС" => "New SSE",
                "Открыть ветку в новом окне" => "Open branch in new window",
                "Добавить подчинённый элемент структуры сайта" => "Add subordinated site structure element",
                "Редактировать данный ЭСС" => "Edit current SSE",
                "Удалить данный ЭСС" => "Delete current SSE",
                "Переместить ЭСС выше по данной ветке" => "Move SSE up by this branch",
                "Переместить ЭСС ниже по данной ветке" => "Move SSE down by this branch",
                "Управление полями ЭСС" => "SSE fields management",
                "Управление правами для ЭСС" => "SSE rights management",
                "Добавить материал к данному ЭСС" => "Add material to current SSE",
                "Перейти к материалам ЭСС" => "Go to SSE materials",
                "Не выбрано" => "Not selected yet",
                "Элементы структуры содержания сайта" => "Site content structure elements",
            ),
            "ru"	=>array(
                "Структура материалов"	=>	"",
                "Элемент структуры сайта" => "",
                "Закрыть форму" => "",
                "Создание" => "",
                "ЭСС" => "",
                "Редактирование" => "",
                "Структура не может быть удалена" => "",
                "*Системная структура" => "",
                "Родитель" => "",
                "Тип структуры" => "",
                "Стандартная структура" => "",
                "Структура подчиненных материалов" => "",
                "Структура таблицы" => "",
                "Наименование" => "",
                "Сгенерировать" => "",
                "Создать материал для структуры" => "",
                "Открыть материал по умолчанию" => "",
                "Редактировать структуру" => "",
                "Добавить новый элемент структуры сайта" => "",
                "Добавить" => "",
                "Отмена" => "",
                "Сохранить элемент структуры сайта" => "",
                "Полей на данный момент - нет" => "",
                "Редактировать поле элемента структуры сайта" => "",
                "Удалить поле элемента структуры сайта" => "",
                "Что нового в структуре сайта" => "",
                "Перейти к структуре сайта" => "",
                "от" => "",
                "Новый ЭСС" => "",
                "Открыть ветку в новом окне" => "",
                "Добавить подчинённый элемент структуры сайта" => "",
                "Редактировать данный ЭСС" => "",
                "Удалить данный ЭСС" => "",
                "Переместить ЭСС выше по данной ветке" => "",
                "Переместить ЭСС ниже по данной ветке" => "",
                "Управление полями ЭСС" => "",
                "Управление правами для ЭСС" => "",
                "Добавить материал к данному ЭСС" => "",
                "Перейти к материалам ЭСС" => "",
                "Не выбрано" => "",
                "Элементы структуры содержания сайта" => "",
            ),
            "ua"	=>array(
                "Структура материалов"	=>	"Структура матеріалів",
                "Элемент структуры сайта" => "Елемент структури сайту",
                "Закрыть форму" => "Закрити форму",
                "Создание" => "Створення",
                "ЭСС" => "ЕСС",
                "Редактирование" => "Редагування",
                "Структура не может быть удалена" => "Структура не може бути видалена",
                "*Системная структура" => "*Системна структура",
                "Родитель" => "Пращур",
                "Тип структуры" => "Тип структури",
                "Стандартная структура" => "Стандартна структура",
                "Структура подчиненных материалов" => "Структура підлеглих матеріалів",
                "Структура таблицы" => "Структура таблиці",
                "Наименование" => "Найменування",
                "Сгенерировать" => "Згенерувати",
                "Создать материал для структуры" => "Створити матеріал для структури",
                "Открыть материал по умолчанию" => "Відкрити матеріал за замовчанням",
                "Редактировать структуру" => "Редагувати структуру",
                "Добавить новый элемент структуры сайта" => "Додати новий елемент структури сайту",
                "Добавить" => "Додати",
                "Отмена" => "Скасувати",
                "Сохранить элемент структуры сайта" => "Зберегти елемент структури сайту",
                "Полей на данный момент - нет" => "Полів на даний момент немає",
                "Редактировать поле элемента структуры сайта" => "Редагувати поле елементу структури сайту",
                "Удалить поле элемента структуры сайта" => "Видалити поле елементу структури сайту",
                "Что нового в структуре сайта" => "Що нового в структурі  сайту",
                "Перейти к структуре сайта" => "Перейти до структури сайту",
                "от" => "від",
                "Новый ЭСС" => "Новий ЕСС",
                "Открыть ветку в новом окне" => "Відкрити гілку у новому вікні",
                "Добавить подчинённый элемент структуры сайта" => "Дадати підлеглий елемент структури сайту",
                "Редактировать данный ЭСС" => "Редагувати поточний ЕСС",
                "Удалить данный ЭСС" => "Видалити поточний ЕСС",
                "Переместить ЭСС выше по данной ветке" => "Перемістити ЕСС вище по поточній гілці",
                "Переместить ЭСС ниже по данной ветке" => "Перемістити ЕСС нижче по поточній гілці",
                "Управление полями ЭСС" => "Управління полями ЕСС",
                "Управление правами для ЭСС" => "Управління правами для ЕСС",
                "Добавить материал к данному ЭСС" => "Додати матеріал до поточного ЕСС",
                "Перейти к материалам ЭСС" => "Перейти до матеріалів ЕСС",
                "Не выбрано" => "Не обрано",
                "Элементы структуры содержания сайта" => "Елементи структури змісту сайту",
            ),
        );
    }
}
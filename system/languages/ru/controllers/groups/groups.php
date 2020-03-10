<?php

    define('LANG_GROUPS_CONTROLLER',        'Группы');
    define('LANG_GROUPS_LIST',              'Список групп');
    define('LANG_GROUPS_VIEW',              'Просмотр группы');
    define('LANG_GROUPS_REFUSE',            'Отклонить и удалить группу');
    define('LANG_GROUPS_ADD',               'Создать группу');
    define('LANG_GROUPS_EDIT',              'Настройки группы');
    define('LANG_GROUPS_CHANGE_OWNER',      'Передать группу');
    define('LANG_GROUPS_DELETE',            'Удалить группу');
    define('LANG_GROUPS_DELETE_CONFIRM',    'Удалить группу %s?');
    define('LANG_GROUPS_UNBIND',            'Отвязать от группы');
    define('LANG_GROUPS_UNBIND_CONFIRM',    'Отвязать %s от группы &laquo;%s&raquo;?');
    define('LANG_GROUPS_UNBIND_SUCCESS',    'Запись отвязана от группы &laquo;%s&raquo;');
    define('LANG_GROUPS_UNBIND_PM',         'Администратор <a href="%s">%s</a> вашей группы &laquo;%s&raquo; отвязал %s &laquo;<a href="%s">%s</a>&raquo;');
    define('LANG_GROUPS_DELETE_CONTENT',    'Удалить также весь контент группы');
    define('LANG_GROUPS_DELETED',           'Группа %s удалена');
    define('LANG_GROUPS_SETTINGS',          'Настроить группы');
    define('LANG_GROUPS_JOIN',              'Вступить в группу');
    define('LANG_GROUPS_LEAVE',             'Выйти из группы');
    define('LANG_GROUPS_EDIT_MAIN',         'Параметры');
    define('LANG_GROUPS_EDIT_STAFF',        'Администраторы');
    define('LANG_GROUPS_WALL',              'Стена группы');
    define('LANG_GROUPS_ADD_STAFF',         'Добавить администратора');
    define('LANG_GROUPS_ADD_STAFF_HINT',    'Введите email члена группы, которого вы хотите назначить администратором');
    define('LANG_GROUPS_STAFF_NOT_MEMBER',  'Пользователь %s не является членом группы либо уже назначен администратором');
    define('LANG_GROUPS_REQUESTS',          'Заявки');
    define('LANG_GROUPS_REQUEST_NOTICE_DECLINE', 'Ваша заявка на вступление в группу &laquo;%s&raquo; была отклонена администратором %s.');
    define('LANG_GROUPS_REQUEST_NOTICE_ACCEPT', 'Ваша заявка на вступление в группу &laquo;%s&raquo; была принята.');
    define('LANG_GROUPS_CHOWNR_NOTICE_ACCEPT', 'Ваше предложение о передачи прав на группу &laquo;%s&raquo; было принято пользователем %s.');
    define('LANG_GROUPS_CHOWNR_NOTICE_DECLINE', 'Ваше предложение о передачи прав на группу &laquo;%s&raquo; было отклонено пользователем %s.');
    define('LANG_GROUPS_REQ_SUCCESS',       'Заявка отправлена администраторам группы');
    define('LANG_GROUPS_REQ_ERROR',         'Ваша заявка на вступление уже на рассмотрении');
    define('LANG_GROUPS_INVITE_GROUP_USERS', 'Кто может приглашать вас в группы');
    define('LANG_GROUPS_ENTER',             'Подать заявку');
    define('LANG_GROUPS_ENTER_CONFIRM',     'Подать заявку на вступление в группу?');
    define('LANG_GROUPS_INVITE_FR',         'Пригласить друзей в группу');
    define('LANG_GROUPS_INVITE',            'Пригласить пользователей в группу');
    define('LANG_GROUPS_INVITE_USER',       'Пригласить пользователя в группу');
    define('LANG_GROUPS_SELECT_USERS_LIST', 'Выберите пользователей');
    define('LANG_GROUPS_REQUEST_NOTICE',    '%s желает вступить в группу &laquo;%s&raquo;');
    define('LANG_GROUPS_INVITE_NOTICE',     '%s приглашает вас вступить в группу &laquo;%s&raquo;');
    define('LANG_GROUPS_CHANGE_OWNER_NOTICE', '%s предлагает вам стать владельцем группы &laquo;%s&raquo;');
    define('LANG_GROUPS_SEND_INVITE',       'Отправить приглашение');
    define('LANG_GROUPS_INVITE_SENT',       'Приглашение отправлено');
    define('LANG_GROUPS_INVITE_PENDING',    'Приглашение уже было отправлено ранее и ожидает рассмотрения');
    define('LANG_GROUPS_NOTIFY_INVITE',     'Уведомлять о приглашениях в группы');
    define('LANG_GROUPS_INVITE_NO_GROUPS',  'Нет групп в которые вы могли бы пригласить этого пользователя');
    define('LANG_GROUPS_INVITE_NO_FRIENDS', 'Нет друзей которых можно пригласить в эту группу');
    define('LANG_GROUPS_JOIN_MESSAGE',      'Вы успешно вступили в группу');
    define('LANG_GROUPS_LEAVE_MESSAGE',     'Ваше участие в группе прекращено');
    define('LANG_GROUP_IS_CLOSED',          'Это закрытая группа. Просмотр разрешен только для участников.');
    define('LANG_GROUP_IS_CLOSED_ICON',     'Закрытая группа');
    define('LANG_GROUP_INFO_CREATED_DATE',  'Создана');
    define('LANG_GROUP_INFO_OWNER',         'Владелец');
    define('LANG_GROUPS_OPT_WALL_ENABLED',  'Показывать стену группы');
    define('LANG_GROUPS_OPT_CHANGE_OWNER_EMAIL', 'E-mail для уведомлений при смене владельца группы');
    define('LANG_GROUPS_OWNER_NEW_EMAIL',   'E-mail адрес нового владельца');
    define('LANG_GROUPS_OWNER_NEW_EMAIL_HINT',   'Внимание! Это действие необратимое.');
    define('LANG_GROUPS_CHANGE_OWNER_SEND',   'Предложение отправлено пользователю');
    define('LANG_GROUPS_CHANGE_OWNER_SUCCESS',   'Вы стали владельцем группы &laquo;%s&raquo;');
    define('LANG_GROUPS_OPT_DS_SHOW',       'Показывать вкладку "%s"');
    define('LANG_GROUPS_DS_MEMBER',         'Участие в группах');
    define('LANG_GROUPS_DS_MY',             'Мои группы');
    define('LANG_RULE_GROUPS_ADD',          'Создание групп');
    define('LANG_RULE_GROUPS_EDIT',         'Редактирование групп');
    define('LANG_RULE_GROUPS_DELETE',       'Удаление групп');
    define('LANG_RULE_GROUPS_INVITE_USERS', 'Приглашать в группу любого пользователя сайта');
    define('LANG_RULE_GROUPS_INVITE_USERS_HINT', 'Если это разрешено в самой группе');
    define('LANG_RULE_GROUPS_BIND_TO_PARENT', 'Привязка записей типов контента');
    define('LANG_RULE_GROUPS_BIND_OFF_PARENT', 'Отвязка записей типов контента');
    define('LANG_RULE_GROUPS_CONTENT_ACCESS', 'Управление правами добавления контента');
    define('LANG_RULE_GROUPS_CONTENT_ACCESS_HINT', 'Пользователь сможет в настройках своих групп регулировать права добавления контента');
    define('LANG_GROUPS_GROUP_JOIN_POLICY', 'Вступление в группу');
    define('LANG_GROUPS_GROUP_EDIT_POLICY', 'Редактирование описания группы');
    define('LANG_GROUPS_GROUP_EDIT_OWNER',  'Только владелец');
    define('LANG_GROUPS_GROUP_EDIT_STAFF',  'Владелец и администраторы');
    define('LANG_GROUPS_GROUP_WALL_POLICY', 'Кто может писать на стене группы');
    define('LANG_GROUPS_GROUP_WALL_REPLY_POLICY', 'Кто может комментировать записи на стене группы?');
    define('LANG_GROUPS_GROUP_WALL_OWNER',  'Только владелец');
    define('LANG_GROUPS_GROUP_WALL_STAFF',  'Администраторы');
    define('LANG_GROUPS_GROUP_WALL_MEMBERS','Все участники');
    define('LANG_GROUPS_GROUP_CTYPE_MEMBERS', 'Все участники, которым это разрешено общими правами доступа');
    define('LANG_GROUPS_GROUP_CTYPE_GROUPS', 'Только участникам, принадлежащим группам');
    define('LANG_GROUPS_GROUP_CTYPE_ROLES',  'Только участникам, заданных ролей');
    define('LANG_GROUPS_GROUP_CTYPE_POLICY', 'Кто может добавлять %s');
    define('LANG_GROUPS_EDIT_ROLES',        'Роли');
    define('LANG_GROUPS_ADD_ROLE',          'Добавить роль');
    define('LANG_GROUPS_SET_ROLES',         'Назначить роли');
    define('LANG_GROUPS_ROLES_SAVE',        'Роли сохранены');
    define('LANG_GROUPS_STAFF_REMOVE_CONFIRM', 'Вы действительно хотите убрать <b>%s</b> из списка администраторов?');
    define('LANG_GROUPS_STAFF_REMOVE_SUCCESS', 'Участник <b>%s</b> убран из списка администраторов');
    define('LANG_GROUPS_STAFF_SET_CONFIRM', 'Вы действительно хотите добавить <b>%s</b> в список администраторов?');
    define('LANG_GROUPS_STAFF_SET_SUCCESS', 'Участник <b>%s</b> добавлен в список администраторов');
    define('LANG_GROUPS_STAFF_SUCCESS_NOTICE', 'Вас назначили администратором группы <b>%s</b>');
    define('LANG_GROUPS_STAFF_REMOVE_NOTICE', 'Вас убрали из списка администраторов группы <b>%s</b>');
    define('LANG_GROUPS_STAFF_SET',         'Сделать администратором');
    define('LANG_GROUPS_STAFF_REMOVE',      'Убрать из администраторов');
    define('LANG_GROUPS_MEMBER_EXPEL',      'Исключить');
    define('LANG_GROUPS_STAFF_EXPEL_CONFIRM', 'Вы действительно хотите убрать <b>%s</b> из списка участников?');
    define('LANG_GROUPS_STAFF_EXPEL_SUCCESS', 'Участник <b>%s</b> убран из группы');
    define('LANG_GROUPS_GROUP_PUBLIC',      'Свободное');
    define('LANG_GROUPS_GROUP_PRIVATE_SOFT','По приглашениям участников');
    define('LANG_GROUPS_GROUP_PRIVATE_HARD','По приглашениям администрации');
    define('LANG_GROUPS_GROUP_IS_CLOSED',   'Просмотр группы');
    define('LANG_GROUPS_GROUP_OPENED',      'Свободный');
    define('LANG_GROUPS_GROUP_CLOSED',      'Только для участников');
    define('LANG_GROUPS_GROUP_MEMBERS',     'Участники группы');
    define('LANG_GROUPS_PROFILE_INDEX',     'О группе');
    define('LANG_GROUPS_PROFILE_ACTIVITY',  'Активность');
    define('LANG_GROUPS_PROFILE_MEMBERS',   'Участники');
    define('LANG_GROUPS_MEMBERS_SPELLCOUNT', 'участник|участника|участников');
    define('LANG_GROUPS_GROUP_SPELLCOUNT',   'группа|группы|групп');
    define('LANG_GROUPS10',                  'групп');
    define('LANG_GROUPS_CTYPES',             'Типы контента для создания в группах');
    define('LANG_GROUPS_CTYPE_ACCESS',       'Для просмотра записи вы должны быть участником группы %s');
    define('LANG_GROUPS_ROLES_ACCESS',       'Запись доступна только для участников группы %s с ролями %s');
    define('LANG_GROUPS_ROLES_LIST_ACCESS',  'У вас нет роли для просмотра этой записи');
    define('LANG_CP_FIELD_IS_IN_CLOSED',     'Гостям закрытой группы');
    define('LANG_GROUPS_FIELDS',             'Поля групп');
    define('ERR_VALIDATE_GROUP_SLUG',        'Только латинские буквы (в нижнем регистре), цифры и дефис');
    define('ERR_VALIDATE_GROUP_SLUG_NUM',    'Не может состоять только из цифр');
    define('LANG_GROUPS_MENU',               'Меню группы');
    define('LANG_PRIVACY_GROUPS',            'Показывать только одногруппникам');
    define('LANG_PRIVACY_GROUPS_ADD',        'Показывать только одногруппникам, имеющим право добавления %s');
    define('LANG_PRIVACY_GROUPS_ROLES',      'Показывать только одногруппникам с заданными ролями');
    define('LANG_GROUPS_ERROR_PARENT_ID',    'Вы не можете добавлять контент в эту группу');
    define('LANG_GROUPS_JOIN_ROLES', 'Роли участников при вступлении');
    define('LANG_GROUPS_CONTEXT_LT_GROUP_CONTENT', 'В списках контента групп');

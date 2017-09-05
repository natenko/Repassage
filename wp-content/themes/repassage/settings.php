<?php
//Настройки панели администрирования
//Регистрация функции настроек
function theme_settings_init()
{
    register_setting('theme_settings', 'theme_settings');
}

// Добавление настроек в меню страницы
function add_settings_page()
{
    add_menu_page(__('Опции темы'), __('Опции темы'), 'manage_options', 'settings', 'theme_settings_page');
}

//Добавление действий
add_action('admin_init', 'theme_settings_init');
add_action('admin_menu', 'add_settings_page');
//Сохранение настроек
function theme_settings_page()
{
    global $select_options;
    if (!isset($_REQUEST['settings-updated'])) $_REQUEST['settings-updated'] = false;
    ?>
    <div>
        <h2 id="title">Опции темы</h2>
        <?php if (false !== $_REQUEST['settings-updated']) : ?>
            <div id="message" class="updated">
                <p><strong>Настройки сохранены</strong></p>
            </div>
        <?php endif; ?>
        <form method="post" action="options.php">
            <?php settings_fields('theme_settings'); ?>
            <?php $options = get_option('theme_settings'); ?>
            <table>
                <tr valign="middle">
                    <th align="center">Контакты</th>
                </tr>
                <tr valign="middle">
                    <th align="left">Заголовок</th>
                    <td>
                        <textarea id="theme_settings[title]" name="theme_settings[title]" rows="2"
                                  cols="50"><?php esc_attr_e($options['title']); ?></textarea>
                    </td>
                </tr>
                <tr valign="middle">
                    <th align="left">Телефон:</th>
                    <td>
                        <input id="theme_settings[phone-1]" type="text" size="15" maxlength="17"
                               placeholder="+38(xxx)xx-xx-xxx" name="theme_settings[phone-1]"
                               value="<?php esc_attr_e($options['phone-1']); ?>"/>
                        <input id="theme_settings[phone-2]" type="text" size="15" maxlength="17"
                               placeholder="+38(xxx)xx-xx-xxx" name="theme_settings[phone-2]"
                               value="<?php esc_attr_e($options['phone-2']); ?>"/>
                    </td>
                </tr>
                <tr valign="middle">
                    <th align="left">email:</th>
                    <td>
                        <input id="theme_settings[email]" type="text" size="33" name="theme_settings[email]"
                               value="<?php esc_attr_e($options['email']); ?>"/>
                    </td>
                </tr>
                <tr valign="middle">
                    <th align="left">skype:</th>
                    <td>
                        <input id="theme_settings[skype]" type="text" size="33" name="theme_settings[skype]"
                               value="<?php esc_attr_e($options['skype']); ?>"/>
                    </td>
                </tr>
                <tr valign="middle">
                    <th align="left">Ссылка на презентацию:</th>
                    <td>
                        <input id="theme_settings[link]" type="text" size="133" name="theme_settings[link]"
                               value="<?php esc_attr_e($options['link']); ?>"/>
                    </td>
                </tr>
                <tr valign="middle">
                    <th align="left">Карта:</th>
                    <td>
                        <input id="theme_settings[map-1]" type="text" size="14" name="theme_settings[map-1]"
                               value="<?php esc_attr_e($options['map-1']); ?>"/>
                        <input id="theme_settings[map-2]" type="text" size="14" name="theme_settings[map-2]"
                               value="<?php esc_attr_e($options['map-2']); ?>"/>

                    </td>
                </tr>
                <tr valign="middle">
                    <th align="left">Подсказка на карте:</th>
                    <td>

                        <textarea id="theme_settings[map-info]" name="theme_settings[map-info]" rows="2"
                                  cols="50"><?php esc_attr_e($options['map-info']); ?></textarea>

                    </td>
                </tr>
            </table>
            <p><input name="submit" id="submit" class="button button-primary" value="Сохранить" type="submit"></p>
        </form>
    </div>
<?php } ?>
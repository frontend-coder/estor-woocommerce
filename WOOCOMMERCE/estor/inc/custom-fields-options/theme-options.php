<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Field\Complex_Field;

// Default options page
Container::make( 'theme_options', 'Настройки темы' )
	->set_icon( 'dashicons-admin-appearance' )
	->add_tab( 'Шапка', array(
		
		Field::make( 'select', 'estor_header_select', 'Нужен ли логотип?' )
		 ->add_options( array(
        'yes' => ' Да, буду использовать логотип ',
        'no' => ' Нет, не буду использовать логотип ',
    ) ),
		
		Field::make( 'image', 'estor_header_logo', 'Логотип' )
		->set_conditional_logic( array(
			'relation' => 'AND',
        array(
            'field' => 'estor_header_select',
            'value' => 'yes',
						'compare' => '=',
        )
    )  ),
	Field::make( 'text', 'estor_header_logotext', 'Название сайта' )->set_width(50)
		->set_conditional_logic( array(
			'relation' => 'AND',
        array(
            'field' => 'estor_header_select',
            'value' => 'no',
						'compare' => '=',
        )
    )  ),

	Field::make( 'text', 'estor_header_logodescr', 'Описание сайта' )->set_width(50)
		->set_conditional_logic( array(
			'relation' => 'AND',
        array(
            'field' => 'estor_header_select',
            'value' => 'no',
						'compare' => '=',
        )
    )  ),







		) )
	->add_tab( 'Подвал', array(
		Field::make( 'text', 'esto_footer_copyright', 'Копирайт' )->set_default_value('&copy; 2017 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>'),
		Field::make( 'radio', 'esto_newsleter_show', 'Показывать блок подписки' )
		->add_options( array(
			'on' => 'Включить',
			'off' => 'Выключить',
		))->set_width(33),

		Field::make( 'radio', 'esto_widgetes_show', 'Показывать блок с виджетами' )
		->add_options( array(
			'on' => 'Включить',
			'off' => 'Выключить',
		))->set_width(33),

Field::make( 'radio', 'esto_copyright_show', 'Показывать блок с копирайтом' )
		->add_options( array(
			'on' => 'Включить',
			'off' => 'Выключить',
		))->set_width(33),
	) );
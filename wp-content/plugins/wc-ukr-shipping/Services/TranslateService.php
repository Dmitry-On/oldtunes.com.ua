<?php

namespace kirillbdev\WCUkrShipping\Services;

if ( ! defined('ABSPATH')) {
  exit;
}

class TranslateService
{
  private $areaTranslates = [
    '71508128-9b87-11de-822f-000c2965ae0e' => 'АРК',
    '71508129-9b87-11de-822f-000c2965ae0e' => 'Винницкая',
    '7150812a-9b87-11de-822f-000c2965ae0e' => 'Волынская',
    '7150812b-9b87-11de-822f-000c2965ae0e' => 'Днепропетровская',
    '7150812c-9b87-11de-822f-000c2965ae0e' => 'Донецкая',
    '7150812d-9b87-11de-822f-000c2965ae0e' => 'Житомирская',
    '7150812e-9b87-11de-822f-000c2965ae0e' => 'Закарпатская',
    '7150812f-9b87-11de-822f-000c2965ae0e' => 'Запорожская',
    '71508130-9b87-11de-822f-000c2965ae0e' => 'Ивано-Франковская',
    '71508131-9b87-11de-822f-000c2965ae0e' => 'Киевская',
    '71508132-9b87-11de-822f-000c2965ae0e' => 'Кировоградская',
    '71508133-9b87-11de-822f-000c2965ae0e' => 'Луганская',
    '71508134-9b87-11de-822f-000c2965ae0e' => 'Львовская',
    '71508135-9b87-11de-822f-000c2965ae0e' => 'Николаевская',
    '71508136-9b87-11de-822f-000c2965ae0e' => 'Одесская',
    '71508137-9b87-11de-822f-000c2965ae0e' => 'Полтавская',
    '71508138-9b87-11de-822f-000c2965ae0e' => 'Ровенская',
    '71508139-9b87-11de-822f-000c2965ae0e' => 'Сумская',
    '7150813a-9b87-11de-822f-000c2965ae0e' => 'Тернопольская',
    '7150813b-9b87-11de-822f-000c2965ae0e' => 'Харьковская',
    '7150813c-9b87-11de-822f-000c2965ae0e' => 'Херсонская',
    '7150813d-9b87-11de-822f-000c2965ae0e' => 'Хмельницкая',
    '7150813e-9b87-11de-822f-000c2965ae0e' => 'Черкасская',
    '7150813f-9b87-11de-822f-000c2965ae0e' => 'Черновицкая',
    '71508140-9b87-11de-822f-000c2965ae0e' => 'Черниговская'
  ];

  /**
   * @return array
   */
  public function getTranslates()
  {
    $translates = [];

    if (WCUS_TRANSLATE_TYPE_MO_FILE === (int)wc_ukr_shipping_get_option('wc_ukr_shipping_np_translates_type')) {
      $translates = [
        'method_title' => __('Новая почта', WCUS_TRANSLATE_DOMAIN),
        'block_title' => __('Укажите отделение доставки', WCUS_TRANSLATE_DOMAIN),
        'placeholder_area' => __('Выберите область', WCUS_TRANSLATE_DOMAIN),
        'placeholder_city' => __('Выберите город', WCUS_TRANSLATE_DOMAIN),
        'placeholder_warehouse' => __('Выберите отделение', WCUS_TRANSLATE_DOMAIN),
        'address_title' => __('Нужна адресная доставка', WCUS_TRANSLATE_DOMAIN),
        'address_placeholder' => __('Введите адрес', WCUS_TRANSLATE_DOMAIN),
        'not_found' => __('Ничего не найдено', WCUS_TRANSLATE_DOMAIN)
      ];
    }
    else {
      $translates = [
        'method_title' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_method_title'),
        'block_title' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_block_title'),
        'placeholder_area' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_placeholder_area'),
        'placeholder_city' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_placeholder_city'),
        'placeholder_warehouse' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_placeholder_warehouse'),
        'address_title' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_address_title'),
        'address_placeholder' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_address_placeholder'),
        'not_found' => wc_ukr_shipping_get_option('wc_ukr_shipping_np_not_found_text')
      ];
    }

    return apply_filters('wc_ukr_shipping_get_nova_poshta_translates', $translates);
  }

  public function translateAreas($areas)
  {
    if ('ru' === $this->getCurrentLanguage()) {
      foreach ($areas as &$area) {
        if (isset($this->areaTranslates[ $area['ref'] ])) {
          $area['description'] = $this->areaTranslates[ $area['ref'] ];
        }
      }
    }

    return $areas;
  }

  public function getCurrentLanguage()
  {
    $lang = get_option('wc_ukr_shipping_np_lang', 'ru');

    if (function_exists('wpml_get_current_language')) {
      if (in_array(wpml_get_current_language(), [ 'ru', 'uk' ])) {
        $lang = wpml_get_current_language();
      }
    }
    elseif (function_exists('pll_current_language')) {
      if (in_array(pll_current_language(), [ 'ru', 'uk' ])) {
        $lang = pll_current_language();
      }
    }

    return apply_filters('wc_ukr_shipping_language', $lang);
  }
}
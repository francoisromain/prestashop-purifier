<?php   
if (!defined('_PS_VERSION_'))
  exit;

class Purifier extends Module
{
  public function __construct()
  {
    $this->name = 'purifier';
    $this->tab = 'front_office_features';
    $this->version = '1.0.0';
    $this->author = 'François Romain';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_); 
    $this->bootstrap = false;

    parent::__construct();

    $this->displayName = $this->l('Purifier');
    $this->description = $this->l('Remove every Javascripts and Css files from Prestashop frontend.');
    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('MYMODULE_NAME'))      
    $this->warning = $this->l('No name provided');
  }

  public function install() 
    {
        return parent :: install() && $this->registerHook('header');
    }

  public function hookHeader()
    {
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/tools.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/validate.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/modules/favoriteproducts/favoriteproducts.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/modules/blockcart/ajax-cart.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/modules/homeslider/js/homeslider.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/modules/blocklayered/blocklayered.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/jquery-1.11.0.min.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/jquery-migrate-1.2.1.min.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/jquery.easing.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/fancybox/jquery.fancybox.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/jquery.scrollTo.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/jquery.serialScroll.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/bxslider/jquery.bxslider.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/autocomplete/jquery.autocomplete.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/bxslider/jquery.bxslider.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/jquery.idTabs.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/jquery.typewatch.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/ui/jquery.ui.core.min.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/ui/jquery.ui.widget.min.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/ui/jquery.ui.mouse.min.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/ui/jquery.ui.slider.min.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/footable/jquery.footable.js');
      $this->context->controller->removeJS(_PS_ROOT_DIR_.'/js/jquery/plugins/footable-sort/jquery.footable-sort.js');

      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blockcart/blockcart.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/paypal/views/css/paypal.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blocklanguages/blocklanguages.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blocksearch/blocksearch.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blocktags/blocktags.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blockuserinfo/blockuserinfo.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blockviewed/blockviewed.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blocklayered/blocklayered.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/themeconfigurator/css/hooks.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/blockwishlist/blockwishlist.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/favoriteproducts/favoriteproducts.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/modules/homefeatured/css/homefeatured.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/ui/themes/base/jquery.ui.core.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/ui/themes/base/jquery.ui.slider.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/ui/themes/base/jquery.ui.theme.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/plugins/fancybox/jquery.fancybox.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/plugins/bxslider/jquery.bxslider.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/plugins/autocomplete/jquery.autocomplete.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/plugins/bxslider/jquery.bxslider.css');
      $this->context->controller->removeCSS(_PS_ROOT_DIR_.'/js/jquery/plugins/footable/jquery.footable.css');
    }
}

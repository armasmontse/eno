<?php

class Cltvo_Page_Home extends Cltvo_Page
{
    public $social_net;
    public $menu;
    public $services;
    public $comunity;
    public $locations;
    public $from_here;
    public $us;
    public $splash;

    function __construct(){
        parent::__construct(specialPage('home',true));
    }


    public function setMetas()
    {
        $this->social_net = $this->getSocialNets();
        $this->services = $this->getServicesContent();
        $this->comunity = $this->getComunity();
        $this->locations  = $this->getLocations();
        $this->from_here  = $this->getFromHere();
        $this->online_shop  = $this->getOnlineShop();

        $this->us  = $this->getUs();
        $this->splash = (object) Cltvo_Splash::getMetaValue($this->post);
    }

    public function getFromHere()
    {
        $from_here = Cltvo_From_Here::getMetaValue($this->post);
        $from_here["content"] = wpautop($from_here["content"]);
        return (object)$from_here;
    }

    public function getOnlineShop()
    {
        $online_shop = Cltvo_Online_Shop::getMetaValue($this->post);
        $online_shop["content"] = wpautop($online_shop["content"]);
        return (object)$online_shop;
    }

    public function getUs()
    {
        $from_here = Cltvo_Us::getMetaValue($this->post);
        $from_here["content"] = wpautop($from_here["content"]);
        return (object)$from_here;
    }


    public function getLocations()
    {
        return array_map(function($post){
            return new Cltvo_Location($post);
        }, get_posts([
          'post_type' => 'Cltvo_Location',
          'post_status' => 'publish',
          'numberposts' => -1,
          'order'    => 'ASC'
        ]));
    }

    protected function getComunity()
    {
        $comunity = Cltvo_Comunity::getMetaValue($this->post);

        $comunity["content"] = wpautop($comunity["content"]);
        return (object) $comunity;
    }

    protected function getSocialNets()
    {
        $social_nets = Cltvo_SocialNet::getMetaValue($this->post);

        $redes = [];

        foreach (Cltvo_SocialNet::$redesConUrl as $net => $label) {
            if (filter_var($social_nets[$net]["url"], FILTER_VALIDATE_URL)) {
                $redes[] = (object) [
                    "label" => empty($social_nets[$net]["label"]) ? $label : $social_nets[$net]["label"],
                    "url"   => $social_nets[$net]["url"],
                ];
            }
        }

        $social_nets["nets"] = $redes;
        return (object) $social_nets;
    }


    protected function getServicesContent()
    {
        $services = (object) Cltvo_Services::getMetaValue($this->post);
        for ($i=1; $i <=3 ; $i++) {
            $services->{"slug_".$i} = "servicios-".sanitize_title($services->{"title_".$i});
            $services->{"content_".$i} = wpautop($services->{"content_".$i});
        }
        return $services;
    }

    protected function getMenuPartContent( array $meta_value)
    {
        $meta_value["show_title_in_menu"] = !empty($meta_value["title"]);
        $meta_value["slug"] = "menu-".sanitize_title($meta_value["title"]);
        $meta_value["right_col"]    = $this->menuContentsFilter(wpautop($meta_value["right_col"]));
        $meta_value["left_col"]    = $this->menuContentsFilter(wpautop($meta_value["left_col"]));

        return (object) $meta_value;
    }

    protected function menuContentsFilter($content='')
    {
        return str_replace([
            "[:hoja:]",
            "[:hojas3:]"
        ], [
            $this->getMenuLeafTag("hoja"),
            $this->getMenuLeafTag("hojas3"),
        ], $content);
    }


    public function getMenuLeafTag($leaf)
    {
        $svg =  file_get_contents(THEMEURL.'/images/menu/'.$leaf.'.svg');
        return'<div class="img__hoja">'.$svg.'</div>';
    }
}

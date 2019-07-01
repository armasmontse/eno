<?php

class Cltvo_Location extends Cltvo_PostTypeCustom_Master
{

    const nombre_plural = 'Ubicaciones';
    const nombre_singular = 'ubicación';
    const slug = 'ubicacion';

	const publicly_queryable = false;
	const has_archive = false;

	protected static $supports = array( 'title','thumbnail',"editor");

    public $info;
    public $map;

    public function setMetas()
    {
        $this->info = $this->getInfo();
        $this->map  = $this->getMap();
    }

    public function getInfo()
    {
        $info = Cltvo_Location_Info::getMetaValue($this->post);

        $info["address"] = wpautop($info["address"]);
        $info["hours"] = wpautop($info["hours"]);
        $info["coments"] = wpautop($info["coments"]);

        return (object)$info;
    }

    public function getMap()
    {
        $maps =  Cltvo_Location_Map::getMetaValue($this->post);
        $map = $maps[CURRENT_STATION_COLOR["slug"]];

        if ($map) {
            return $map;
        }

        $maps = array_filter($maps, function($map){
            return $map;
        });

        if (empty($maps)) {
            return null;
        }

        return reset($maps);
    }
}

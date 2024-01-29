<?php
namespace NeosLoves\Iconify\Eel\Helper;

use Iconify\JSONTools\Collection as IconifyCollection;
use Iconify\JSONTools\SVG;
use Neos\Eel\ProtectedContextAwareInterface;

class IconifyHelper implements ProtectedContextAwareInterface
{

    public function getSvg(string $name, array $props){

        list($collectionIdentifier, $iconIdentifier) = explode(':', $name);

        $collection = new IconifyCollection();
        $collection->loadIconifyCollection($collectionIdentifier);
        $svg = new SVG($collection->getIconData($iconIdentifier));
        return $svg->getSVG($props);

    }

    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }

}

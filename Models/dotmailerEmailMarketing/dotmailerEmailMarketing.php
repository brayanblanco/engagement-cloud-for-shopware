<?php

namespace Shopware\CustomModels\DotmailerEmailMarketing;

use Shopware\Components\Model\ModelEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="s_plugin_dotmailer_email_marketing")
 */
class DotmailerEmailMarketing extends ModelEntity
{
    /**
     *
     * @var integer $id
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     *
     * @var string $plugin_id
     *
     * @ORM\Column(name="plugin_id", type="string", nullable=false)
     */
    private $plugin_id;

    /**
     * return string
     */
    public function getPluginID()
    {
        return $this->plugin_id;
    }

    /**
     * @param $plugin_id string
     */
    public function setPluginID($plugin_id)
    {
        $this->plugin_id = $plugin_id;
    }
}

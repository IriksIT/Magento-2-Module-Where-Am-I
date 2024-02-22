<?php

namespace IriksIT\WhereAmI\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Environment implements OptionSourceInterface
{
    /**
     * Return array of options as value-label pairs, eg. value => label
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => '0',
                'label' => __('Local')
            ],
            [
                'value' => '1',
                'label' => __('Staging')
            ],
            [
                'value' => '2',
                'label' => __('Upgrade')
            ],
            [
                'value' => '3',
                'label' => __('Release')
            ],
            [
                'value' => '4',
                'label' => __('Live')
            ],
            [
                'value' => '5',
                'label' => __('Custom')
            ]
        ];
    }
}

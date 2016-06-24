<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 17/06/2016
 * Time: 13:58
 */
namespace Juicy\Geoip\Model\Config\Source;

class URL implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        // TODO: Implement toOptionArray() method.

        return [
            ['value' => 'UK','label' => __('UK')],
            ['value' => 'IT','label' => __('IT')],
            ['value' => 'FR','label' => __('FR')],
        ];

    }

}
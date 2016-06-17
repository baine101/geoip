<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 17/06/2016
 * Time: 13:22
 *
 * Decalres my own select dropdown values
 *
 */
namespace Juicy\Geoip\Model\Config\Source;

class origin implements \Magento\Framework\Option\ArrayInterface
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
        ['value' => 'USA','label' => __('USA')],
        ['value' => 'PL','label' => __('PL')],
        ];

    }

}
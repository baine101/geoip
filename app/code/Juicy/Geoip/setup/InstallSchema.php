<?php
namespace Juicy\Geoip\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        /**
         * Create table 'affiliate'
         */
        $table = $installer->getConnection()->newTable(
            $installer->getTable('affiliate'))
            ->addColumn(
                'Geoip_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'Geoip Id'
            )->addColumn(
                'country',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => false],
                'Country'
            )->addColumn(
                'currency',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['nullable' => false, 'default' => '0'],
                'Currency'
            )->addColumn(
                'URL',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [],
                'URL');

        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }
}
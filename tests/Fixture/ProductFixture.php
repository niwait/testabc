<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductFixture
 */
class ProductFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'product';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'today' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '2000/7/25', 'precision' => null],
        'title' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '製品サービス', 'precision' => null, 'fixed' => null],
        'company' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '会社名', 'precision' => null, 'fixed' => null],
        'text' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '案件内容', 'precision' => null, 'fixed' => null],
        'bookmark' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ブックマーク', 'precision' => null, 'fixed' => null],
        'mony' => ['type' => 'integer', 'length' => 32, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '利用金額', 'precision' => null, 'autoIncrement' => null],
        'initial' => ['type' => 'integer', 'length' => 32, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '初期費用', 'precision' => null, 'autoIncrement' => null],
        'flee' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '無料プラン', 'precision' => null, 'fixed' => null],
        'trial' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'トライアル', 'precision' => null, 'fixed' => null],
        'major' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '大分類', 'precision' => null, 'fixed' => null],
        'middle' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '中分類', 'precision' => null, 'fixed' => null],
        'url' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'url', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'today' => '2020-12-15',
                'title' => 'Lorem ipsum dolor sit amet',
                'company' => 'Lorem ipsum dolor sit amet',
                'text' => 'Lorem ipsum dolor sit amet',
                'bookmark' => 'Lorem ipsum dolor sit amet',
                'mony' => 1,
                'initial' => 1,
                'flee' => 'Lorem ipsum dolor sit amet',
                'trial' => 'Lorem ipsum dolor sit amet',
                'major' => 'Lorem ipsum dolor sit amet',
                'middle' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

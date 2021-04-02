<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PrsFixture
 */
class PrsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'company' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => '0', 'collate' => 'utf8_general_ci', 'comment' => '会社', 'precision' => null, 'fixed' => null],
        'img' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => '0', 'collate' => 'utf8_general_ci', 'comment' => 'イメージ', 'precision' => null, 'fixed' => null],
        'url' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => '0', 'collate' => 'utf8_general_ci', 'comment' => 'URL', 'precision' => null, 'fixed' => null],
        'count' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'クリック回数', 'precision' => null, 'autoIncrement' => null],
        'startday' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '開始日', 'precision' => null],
        'endday' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '終了日', 'precision' => null],
        'showhide' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '表示・非表示', 'precision' => null, 'fixed' => null],
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
                'company' => 'Lorem ipsum dolor sit amet',
                'img' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'count' => 1,
                'startday' => '2020-12-15',
                'endday' => '2020-12-15',
                'showhide' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

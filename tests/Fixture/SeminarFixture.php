<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SeminarFixture
 */
class SeminarFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'seminar';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'today' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '登録日', 'precision' => null],
        'title' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'タイトル', 'precision' => null, 'fixed' => null],
        'company' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '会社名', 'precision' => null, 'fixed' => null],
        'mail' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'text' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'テキスト', 'precision' => null, 'fixed' => null],
        'prefecture' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '都道府県', 'precision' => null, 'fixed' => null],
        'eria' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '場所', 'precision' => null, 'fixed' => null],
        'date' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '日時', 'precision' => null, 'fixed' => null],
        'contents' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '内容', 'precision' => null, 'fixed' => null],
        'cost' => ['type' => 'integer', 'length' => 8, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '費用', 'precision' => null, 'autoIncrement' => null],
        'url' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'url', 'precision' => null, 'fixed' => null],
        'major' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '大分類', 'precision' => null, 'fixed' => null],
        'middle' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '中分類', 'precision' => null, 'fixed' => null],
        'good' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => 'いいね', 'precision' => null, 'autoIncrement' => null],
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
                'mail' => 'Lorem ipsum dolor sit amet',
                'text' => 'Lorem ipsum dolor sit amet',
                'prefecture' => 'Lorem ipsum dolor sit amet',
                'eria' => 'Lorem ipsum dolor sit amet',
                'date' => 'Lorem ipsum dolor sit amet',
                'contents' => 'Lorem ipsum dolor sit amet',
                'cost' => 1,
                'url' => 'Lorem ipsum dolor sit amet',
                'major' => 'Lorem ipsum dolor sit amet',
                'middle' => 'Lorem ipsum dolor sit amet',
                'good' => 1,
            ],
        ];
        parent::init();
    }
}

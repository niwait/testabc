<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JobFixture
 */
class JobFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'job';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'today' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '登録日', 'precision' => null],
        'title' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '製品サービス名', 'precision' => null, 'fixed' => null],
        'company' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '会社名', 'precision' => null, 'fixed' => null],
        'mail' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'text' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'テキスト', 'precision' => null, 'fixed' => null],
        'prefecture' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '県', 'precision' => null, 'fixed' => null],
        'place' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '場所', 'precision' => null, 'fixed' => null],
        'operation' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '稼働日時', 'precision' => null, 'fixed' => null],
        'contents' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '内容', 'precision' => null, 'fixed' => null],
        'reword' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '報酬', 'precision' => null, 'autoIncrement' => null],
        'recruitment' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '募集期間', 'precision' => null, 'fixed' => null],
        'url' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'url', 'precision' => null, 'fixed' => null],
        'major' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '大分類', 'precision' => null, 'fixed' => null],
        'middle' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '中分類', 'precision' => null, 'fixed' => null],
        'good' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'いいね', 'precision' => null, 'fixed' => null],
        'bookmark' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ブックマーク', 'precision' => null, 'fixed' => null],
        'occupation' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '職種', 'precision' => null, 'fixed' => null],
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
                'today' => '2020-12-21',
                'title' => 'Lorem ipsum dolor sit amet',
                'company' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'text' => 'Lorem ipsum dolor sit amet',
                'prefecture' => 'Lorem ipsum dolor sit amet',
                'place' => 'Lorem ipsum dolor sit amet',
                'operation' => 'Lorem ipsum dolor sit amet',
                'contents' => 'Lorem ipsum dolor sit amet',
                'reword' => 1,
                'recruitment' => 'Lorem ipsum dolor sit amet',
                'url' => 'Lorem ipsum dolor sit amet',
                'major' => 'Lorem ipsum dolor sit amet',
                'middle' => 'Lorem ipsum dolor sit amet',
                'good' => 'Lorem ipsum dolor sit amet',
                'bookmark' => 'Lorem ipsum dolor sit amet',
                'occupation' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

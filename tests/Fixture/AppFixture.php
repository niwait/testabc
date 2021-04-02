<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AppFixture
 */
class AppFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'app';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'userId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ユーザーID', 'precision' => null, 'autoIncrement' => null],
        'jobId' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ジョブID', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '名前', 'precision' => null, 'fixed' => null],
        'kana' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'カナ', 'precision' => null, 'fixed' => null],
        'postcode' => ['type' => 'string', 'length' => 8, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '郵便番号', 'precision' => null, 'fixed' => null],
        'address_a' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '住所', 'precision' => null, 'fixed' => null],
        'address_b' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '住所2', 'precision' => null, 'fixed' => null],
        'address_c' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '住所3', 'precision' => null, 'fixed' => null],
        'address_d' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'マンション名', 'precision' => null, 'fixed' => null],
        'mail' => ['type' => 'string', 'length' => 256, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'メール', 'precision' => null, 'fixed' => null],
        'tel' => ['type' => 'string', 'length' => 16, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '電話番号', 'precision' => null, 'fixed' => null],
        'educat' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '学歴', 'precision' => null, 'fixed' => null],
        'skill' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '保有資格・スキル', 'precision' => null, 'fixed' => null],
        'pr' => ['type' => 'string', 'length' => 512, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '自己PR', 'precision' => null, 'fixed' => null],
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
                'userId' => 1,
                'jobId' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'kana' => 'Lorem ipsum dolor sit amet',
                'postcode' => 'Lorem ',
                'address_a' => 'Lorem ipsum do',
                'address_b' => 'Lorem ipsum dolor sit amet',
                'address_c' => 'Lorem ipsum dolor sit amet',
                'address_d' => 'Lorem ipsum dolor sit amet',
                'mail' => 'Lorem ipsum dolor sit amet',
                'tel' => 'Lorem ipsum do',
                'educat' => 'Lorem ipsum dolor sit amet',
                'skill' => 'Lorem ipsum dolor sit amet',
                'pr' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}

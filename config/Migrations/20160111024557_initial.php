<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {
        $table = $this->table('contactus');
        $table
            ->addColumn('subject', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('body', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('userid', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('date', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('status', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $table = $this->table('durations', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('StartDate', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('EndDate', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('Flag', 'integer', [
                'default' => 0,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('emaildb');
        $table
            ->addColumn('company', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('tel', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('time', 'integer', [
                'default' => 0,
                'limit' => 12,
                'null' => false,
            ])
            ->addColumn('ip', 'string', [
                'default' => '',
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('supportor', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('userid', 'integer', [
                'default' => 0,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('subject', 'string', [
                'default' => null,
                'limit' => 200,
                'null' => true,
            ])
            ->create();

        $table = $this->table('enduser');
        $table
            ->addColumn('supportor', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('pwd', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('company', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('department', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('tel', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('fax', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('homepage', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('remark', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => 0,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('date', 'integer', [
                'default' => 0,
                'limit' => 12,
                'null' => false,
            ])
            ->addColumn('address', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('zipcode', 'string', [
                'default' => '',
                'limit' => 115,
                'null' => false,
            ])
            ->addColumn('CHPCode', 'string', [
                'default' => '',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('CHPTime', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('hosyou', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('seikou', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('loginip', 'string', [
                'default' => '',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('logintime', 'integer', [
                'default' => 0,
                'limit' => 14,
                'null' => false,
            ])
            ->addColumn('agent', 'integer', [
                'default' => 0,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('money_bank', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('sellremark', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('techremark', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('billlastday', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('parent', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('custom', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('keystr', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('engines', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('Name', 'string', [
                'default' => '',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('ShowName', 'string', [
                'default' => null,
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('Short', 'string', [
                'default' => '',
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('Code', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->create();

        $table = $this->table('extra', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('ExtraType', 'integer', [
                'comment' => '1 - in top 5, 2 - in top 3',
                'default' => 0,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('Price', 'integer', [
                'default' => 0,
                'limit' => 10,
                'null' => false,
            ])
            ->create();

        $table = $this->table('keywords', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('UserID', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('server_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => true,
            ])
            ->addColumn('Keyword', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('Url', 'string', [
                'default' => '',
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('Engine', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('g_local', 'string', [
                'default' => 1,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('cost', 'integer', [
                'default' => 0,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('Price', 'integer', [
                'default' => 0,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('limit_price', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('limit_price_group', 'integer', [
                'comment' => 'set limit price group: 1,2,3',
                'default' => null,
                'limit' => 1,
                'null' => true,
            ])
            ->addColumn('upday', 'string', [
                'default' => 0,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('goukeifee', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('sengoukeifee', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('$sensengoukeifee', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Enabled', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Strict', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Extra', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('start', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('rankstart', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('rankend', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('kaiyaku_reason', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('middle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('middleinfo', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('seika', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('nocontract', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('csv_type', 'integer', [
                'comment' => '[1=直営,2=直営2 , 3=代理店,4=ビスカス,5=アサミ,6=エニー]',
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('penalty', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('service', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('mobile', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('c_logic', 'boolean', [
                'comment' => 'Ranking restricted to company logic',
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('sales', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('sitename', 'string', [
                'comment' => 'CSV',
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $table = $this->table('logs');
        $table
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('log', 'string', [
                'comment' => 'pre&after data log',
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('ip', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('useragent', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('mvc', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => true,
            ])
            ->addColumn('read', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('m_rankhistories');
        $table
            ->addColumn('keyword_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('engine_id', 'integer', [
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('keyword', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('rank', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('rankdate', 'string', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('nocontractkey', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('UserID', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('Keyword', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('Url', 'string', [
                'default' => '',
                'limit' => 200,
                'null' => false,
            ])
            ->addColumn('Engine', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('Price', 'integer', [
                'default' => 0,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('upday', 'string', [
                'default' => 0,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('goukeifee', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('sengoukeifee', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('$sensengoukeifee', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Enabled', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Strict', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Extra', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('start', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('rankstart', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('rankend', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('kaiyaku_reason', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('middle', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('middleinfo', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $table = $this->table('notice');
        $table
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('label', 'string', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('history', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('orders', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('UserID', 'integer', [
                'default' => 0,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('Keywords', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Url', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('TotalPrice', 'integer', [
                'default' => 0,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('Enabled', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('OrderDate', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('EnableDate', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $table = $this->table('quote_supportor', ['id' => false, 'primary_key' => ['supportorid']]);
        $table
            ->addColumn('supportorid', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 12,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('fullname', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->create();

        $table = $this->table('rankhistory', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('Url', 'string', [
                'default' => '',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Rank', 'string', [
                'default' => '',
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('RankDate', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('params', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('rankhistoryss', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('Url', 'string', [
                'default' => '',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Rank', 'string', [
                'default' => '',
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('RankDate', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $table = $this->table('rankkeywords', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Keyword', 'string', [
                'default' => '',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('google_jp', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('yahoo_jp', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('google_en', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('yahoo_en', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('bing', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('ranklogs');
        $table
            ->addColumn('keyword_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('engine_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('keyword', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('rank', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('params', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('rankdate', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('ranks');
        $table
            ->addColumn('keyword_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('engine_id', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('keyword', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('url', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('rank', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('rankdate', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('resell_endcustom');
        $table
            ->addColumn('resellid', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('customid', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $table = $this->table('sales_goals');
        $table
            ->addColumn('type', 'integer', [
                'comment' => '1:seika montly 2:seika daily',
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('goal', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('target', 'string', [
                'comment' => 'target day, month or year',
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('sales_keywords');
        $table
            ->addColumn('keyword_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('user_id', 'integer', [
                'default' => null,
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('keyword', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('rank', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('sales', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('cost', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('profit', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('limit', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => false,
            ])
            ->addColumn('date', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('sendemail');
        $table
            ->addColumn('status', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $table = $this->table('seohistory', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('Remark', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Finish', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('AddDate', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->create();

        $table = $this->table('servers');
        $table
            ->addColumn('code', 'integer', [
                'comment' => 'Server Code',
                'default' => null,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('ip', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('location', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('api', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('storage', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('memo', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'timestamp', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('servicelog', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('LogTime', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('Content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('Type', 'integer', [
                'default' => 0,
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('Checked', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('syslog', ['id' => false, 'primary_key' => ['ID']]);
        $table
            ->addColumn('ID', 'integer', [
                'autoIncrement' => true,
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('LogTime', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('Content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('ip', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->create();

        $table = $this->table('tmp', ['id' => false, 'primary_key' => ['']]);
        $table
            ->addColumn('ID', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('Url', 'string', [
                'default' => '',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Rank', 'string', [
                'default' => '',
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('RankDate', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('params', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('tmp_rankhistory', ['id' => false, 'primary_key' => ['']]);
        $table
            ->addColumn('ID', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('KeyID', 'integer', [
                'default' => 0,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('Url', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('Rank', 'string', [
                'default' => null,
                'limit' => 8,
                'null' => false,
            ])
            ->addColumn('RankDate', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('params', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

        $table = $this->table('user');
        $table
            ->addColumn('supportor', 'integer', [
                'default' => 0,
                'limit' => 4,
                'null' => false,
            ])
            ->addColumn('pwd', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('company', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('department', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('tel', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('fax', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('homepage', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('remark', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('status', 'integer', [
                'default' => 0,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('date', 'integer', [
                'default' => 0,
                'limit' => 12,
                'null' => false,
            ])
            ->addColumn('address', 'text', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('zipcode', 'string', [
                'default' => '',
                'limit' => 115,
                'null' => false,
            ])
            ->addColumn('CHPCode', 'string', [
                'default' => '',
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('CHPTime', 'integer', [
                'default' => 0,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('hosyou', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('seikou', 'string', [
                'default' => '',
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('loginip', 'string', [
                'default' => '',
                'limit' => 20,
                'null' => false,
            ])
            ->addColumn('logintime', 'integer', [
                'default' => 0,
                'limit' => 14,
                'null' => false,
            ])
            ->addColumn('agent', 'integer', [
                'default' => 0,
                'limit' => 1,
                'null' => false,
            ])
            ->addColumn('money_bank', 'boolean', [
                'default' => 0,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('sellremark', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('techremark', 'string', [
                'default' => '',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('billlastday', 'string', [
                'default' => '翌月末',
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('role', 'integer', [
                'default' => null,
                'limit' => 5,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('updated', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('logo', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('limit_price_multi', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('limit_price_multi2', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->addColumn('limit_price_multi3', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
            ])
            ->create();

        $table = $this->table('users');
        $table
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->create();

    }

    public function down()
    {
        $this->dropTable('contactus');
        $this->dropTable('durations');
        $this->dropTable('emaildb');
        $this->dropTable('enduser');
        $this->dropTable('engines');
        $this->dropTable('extra');
        $this->dropTable('keywords');
        $this->dropTable('logs');
        $this->dropTable('m_rankhistories');
        $this->dropTable('nocontractkey');
        $this->dropTable('notice');
        $this->dropTable('orders');
        $this->dropTable('quote_supportor');
        $this->dropTable('rankhistory');
        $this->dropTable('rankhistoryss');
        $this->dropTable('rankkeywords');
        $this->dropTable('ranklogs');
        $this->dropTable('ranks');
        $this->dropTable('resell_endcustom');
        $this->dropTable('sales_goals');
        $this->dropTable('sales_keywords');
        $this->dropTable('sendemail');
        $this->dropTable('seohistory');
        $this->dropTable('servers');
        $this->dropTable('servicelog');
        $this->dropTable('syslog');
        $this->dropTable('tmp');
        $this->dropTable('tmp_rankhistory');
        $this->dropTable('user');
        $this->dropTable('users');
    }
}

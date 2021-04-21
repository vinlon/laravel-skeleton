<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DbCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create
                            {--show : 只显示SQL语句, 不执行}
                            ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '创建数据库及用户';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //默认显示创建数据库的语句
        $schema = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $charset = config('database.connections.mysql.charset', 'utf8mb4');
        $collation = config('database.connections.mysql.collation', 'utf8mb4_unicode_ci');

        $createDatabaseSql = "CREATE DATABASE IF NOT EXISTS {$schema} CHARACTER SET {$charset} COLLATE {$collation};";
        $createUserSql = "GRANT ALL ON {$schema}.* TO {$username}@'%' IDENTIFIED BY '{$password}';";

        $this->info($createDatabaseSql);
        $this->info($createUserSql);

        // 检查数据库连接
        // 创建数据库
        // 创建用户并授权
        // 测试连接

        return 0;
    }
}

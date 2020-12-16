# Laravel Skeleton 应用开发基础模板

## 功能

在 [laravel/laravel](https://github.com/laravel/laravel/tree/7.x) 的基础上增加以下功能

- 增加 DB_PREFIX 环境变量
- 引入 SQL-LOGGER
- 引入 IDE-HELPER 并调整配置
- 配置 PHP-CS-FIXER
- 简化 .env.example（只保留必要的项）, 执行 composer install 后创建 .env 文件（如果.env文件不存在）
- 增加 scratch.php 文件


## 使用 

### 使用composer create-project 创建项目

```shell script
composer create-project --prefer-dist laravel/laravel:^7.0 blog
```


## 参考
https://github.com/overtrue/laravel-skeleton
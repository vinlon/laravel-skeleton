# Laravel Skeleton 应用开发基础模板

## 功能

在 [laravel/laravel](https://github.com/laravel/laravel/tree/7.x) 的基础上增加以下功能

- [x] 增加 DB_PREFIX 环境变量
- [ ] 引入 sql-logger
- [ ] 引入 ide-helper 并调整配置
- [x] 配置 php-cs-fixer
- [x] 简化 .env.example（只保留必要的项）, 执行 composer install 后创建 .env 文件（如果.env文件不存在）
- [x] 增加 scratch.php 文件
- [ ] Eloquent Model Date Serialization
- [x] composer-git-hooks

## 使用 

### 使用composer create-project 创建项目

```shell script
composer create-project --prefer-dist vinlon/laravel {project-name}
```


## 参考
https://github.com/overtrue/laravel-skeleton
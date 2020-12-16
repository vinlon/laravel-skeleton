# Laravel Skeleton 应用开发基础模板

## 功能

在 [laravel/laravel:7.x](https://github.com/laravel/laravel/tree/7.x) 的基础上增加以下功能

- [x] 增加 DB_PREFIX 环境变量
- [x] 引入 sql-logger, 并配置专用的 log channel
- [x] 引入 ide-helper 并调整配置
- [x] 配置 php-cs-fixer
- [x] 简化 .env.example（只保留必要的项）, 执行 composer install 后创建 .env 文件（如果.env文件不存在）
- [x] 增加 scratch.php 文件，用于快速启动laravel并执行一段代码逻辑
- [ ] Eloquent Model Date Serialization
- [x] composer-git-hooks

## 使用 

### 使用composer create-project 创建项目

```shell script
composer create-project --prefer-dist vinlon/laravel {project-name}
```

### 代码格式化

#### 手动执行

```shell script
# 检查需要格式化的内容，但不执行
composer check-style

# 格式化代码
composer fix-style 
```

#### 使用 git-hook 在提交代码时自动执行

在 composer.json 文件中，为 pre-commit 和 pre-push 事件定义了 git-hook.

1. pre-commit: 在 commit 代码前会调用 fix-staged-php-files 脚本，该脚本会修复所有待提交文件的格式。
2. pre-push: 在 push 代码前会检查所有 php 文件，如果有需要格式化的文件则 push 失败，
此时需要手动执行 composer fix-style, 然后 commit 格式化后的代码，再重新 push。


## 参考
https://github.com/overtrue/laravel-skeleton
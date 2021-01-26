# Laravel Skeleton 应用开发基础模板

## 功能

在 [laravel/laravel:7.x](https://github.com/laravel/laravel/tree/7.x) 的基础上增加以下功能

- [x] 增加 DB_PREFIX 环境变量
- [x] 引入 sql-logger, 并配置专用的 log channel
- [x] 引入 ide-helper 并调整配置
- [x] 配置 php-cs-fixer 和 composer-git-hooks
- [x] 简化 .env.example（只保留必要的项）, 执行 composer install 后创建 .env 文件（如果.env文件不存在）
- [x] 增加 scratch.php 文件，用于快速启动 laravel 并执行一段代码
- [x] 定义 BaseModel , 继承后自动实现日期序列化和fillable字段定义
- [x] composer 使用阿里云的镜像源

## 使用 

### 使用composer create-project 创建项目

```shell
composer create-project --prefer-dist vinlon/laravel-skeleton {:project-name}
```

执行 `php init`, 然后按提示进行操作，对项目进行初始化


### 日期格式

从 laravel 7 开始，调用 Eloquent Model 的 toArray方法，日期字段的输出格式为 `2020-12-10T09:28:59.000000Z`

可通过在 Model 中 `use SerializeDateTrait;`

```php
class User extends Model
{
    use SerializeDateTrait;
}
```

或 extend BaseModel

```php
class User extends BaseModel
{
}
```

将日期输出格式修改为 `2020-12-10 09:28:59`


### IDE-Helper

目前只用到了 ide-helper-models, 使用 @mixin 方式，对 Model 类的影响最小，将变化集中到 _ide_helper_models.php 文件中

可使用如下命令生成 _ide_helper_models.php 文件

```shell
php artisan ide-helper:models -M
```

或者使用 composer 命令

```shell
composer ide-helper
```

### 代码格式化

#### 手动执行

```shell
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

### Enum的使用

#### 常用功能
[创建Enum类](https://github.com/BenSampo/laravel-enum#enum-definition)  
[Eloquent Model 属性转换](https://github.com/BenSampo/laravel-enum#attribute-casting)  
[自定义 $model->toArray() 的行为](https://github.com/BenSampo/laravel-enum#customising-model-toarray-behaviour)  
[数据验证](https://github.com/BenSampo/laravel-enum#pipe-validation)  
[定义 description 属性](https://github.com/BenSampo/laravel-enum#enum-descriptions)  
[常用静态方法](https://github.com/BenSampo/laravel-enum#enum-class-reference)  

#### 生成注解  
```shell
# 使用 artisan 命令为 enum 类生成注解 
php artisan enum:annotate

# 使用 composer 自定义命令同时为 model 类和 enum 类生成注解
composer ide-helper
```

## 参考
https://github.com/overtrue/laravel-skeleton

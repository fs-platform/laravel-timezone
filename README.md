## warehouse

- 根据国家code 获取对应时区
- 本拓展满足psr2,psr4 规范
- 已通过单元测试

## 基本使用
1. 安装
```bash
$ composer require aron/laravel-timezone
```

2. 发布config 文件
```bash
$ php artisan vendor:publish --provider="Aron\Timezone\Provider\TimezoneServiceProvider"
```

4. 开始使用
```php
 \Timezone::getTimezoneByCountryCode($countryCode);
```

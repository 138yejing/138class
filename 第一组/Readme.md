# 编程约定

* 文件名（文件名无下述前缀的文件通常只供PHP内部使用，不暴露给用户，或者不生成HTML）

|前缀     |说明|
|:----   |:------------|
|page_   |完整的页面|
|widget_ |页面中的主要部件|
|db_     |数据库相关|
|html_   |html常见的link scrpit标签，还有html头部|
|http_   |http协议相关|
|mod_    |业务相关模块|

# 注意事项
1. 需要先访问db_init.php文件初始化数据库并自动插入样例数据。
2. 访问page_login.php, 输入测试账号，用户名test，密码test，登录。自动跳转到用户中心page_ucenter.php。

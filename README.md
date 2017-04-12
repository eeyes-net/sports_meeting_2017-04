# 2017年西安交通大学校运动会新闻宣传网站

* 2017-03-31 筹备
* 2017-04-03 前端开始编写代码
* 2017-04-06 后端开始编写代码
* 2017-04-07 后端基本完成
* 2017-04-11 网站基本完成

## 安装

1. 解压代码，并执行`composer install`

2. `chmod 777 runtime -R`

3. 创建数据库（和数据库用户）

4. `cp application/database.php.example application/database.php`，并修改`application/database.php`中的用户名密码

5. `php think migrate:run`

6. `cp application/extra.example application/extra`，并修改`/application/extra/auth.php`中的管理员NetID

7. `chmod 777 runtime -R`

## 说明

## 目录结构

    ├─application        # 应用目录
    │  ├─admin           # 后台管理模块
    │  ├─auth            # 登录模块
    │  ├─common          # 公用部分主要是Model和View
    │  ├─extra           # ThinkPHP5自动加载的额外配置文件
    │  ├─extra.example   # 额外配置文件目录示例
    │  ├─index           # 主页模块
    │  ├─tpl             # 404页面等
    │  └─traits          # 可复用的Traits
    ├─database           # 数据库文件
    │  └─migrations      # 数据库迁移文件
    ├─public             # Web服务根目录
    │  └─static          # 静态文件
    │     ├─admin        # 后台管理模块
    │     │  ├─css       # 自定义的样式表
    │     │  ├─dist      # 现有库
    │     │  ├─images    # 页面的图片
    │     │  └─js        # 自定义的js
    │     └─index        # 主页模块
    │        └─src       # 主页的一些附加文件
    ├─runtime            # 日志、编译后的模板、Cache等
    ├─thinkphp           # ThinkPHP5框架目录
    └─vendor             # Composer包目录

## 开发人员

* 产品：Zhang Jiaxing
* 视觉：
* 前端：Zhou Yuchen, Ganlv
* 后端：Ganlv, Cantjie

## LICENSE

    Copyright 2017 eeyes.net
    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.

# 2017年西安交通大学校运动会新闻宣传网站

* 2017-03-31 筹备
* 2017-04-03 前端开始编写代码
* 2017-04-06 后端开始编写代码

## 安装

## 设置root账户

在命令行执行
```bash
php think admin:create your_net_id
```

最后面是你需要设置成root的用户的NetId

## 说明

## 目录结构

    ├─application        # 应用目录
    │  ├─admin           # 后台管理模块
    │  ├─auth            # 登录模块
    │  ├─common          # 公用部分主要是Model和View
    │  ├─extra           # ThinkPHP5自动加载的额外配置文件
    │  ├─extra.example   # 额外配置文件目录示例
    │  ├─index           # 主页模块
    │  ├─lang            # 一些翻译、字符串常量
    │  ├─tpl             # 404页面等
    │  └─traits          # 可复用的Traits
    ├─database           # 数据库文件
    │  └─migrations      # 数据库迁移文件
    ├─public             # Web服务根目录
    │  ├─css             # 自定义的样式表
    │  ├─dist            # 现有库
    │  ├─images          # 页面的图片
    │  └─js              # 自定义的js
    ├─runtime            # 日志、编译后的模板、Cache等
    ├─thinkphp           # ThinkPHP5框架目录
    └─vendor             # Composer包目录

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

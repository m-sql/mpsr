#  mpsr (my myPSR)

## 是一个对PSR 美化 和 PHP Hacker小工具.

# 功能特点
* 跨平台支持（支持Linux, Mac环境，Windows环境理论上也支持，不过未全面测试）
* 目前只支持 PSR 规范协议的七种
* 支持3种查询（mpsr -h  和 mpsr -q  及 mpsr -hack ）等......陆续开放中ing
* 支持PSR信息丰富解读

#  安装使用
## 依赖软件
##### 一般依赖
* PHP 5.40+
* git

### 0、下载源码
```linux
 [root@b1ab791fddae tmp]# git clone https://github.com/m-sql/mpsr.git
 Cloning into 'mpsr'...
 remote: Enumerating objects: 10, done.
 remote: Counting objects: 100% (10/10), done.
 remote: Compressing objects: 100% (7/7), done.
 remote: Total 10 (delta 0), reused 10 (delta 0), pack-reused 0
 Unpacking objects: 100% (10/10), done.
```
### 1、linux下执行php
``` linux
[root@b1ab791fddae tmp]# cd ./mpsr/php/
[root@b1ab791fddae php]# php sh.php 
    _   _ _             ____  ____  ____  
   | | | (_)  _ __ ___ |  _ \/ ___||  _ \ 
   | |_| | | | '_ ` _ \| |_) \___ \| |_) |
   |  _  | | | | | | | |  __/ ___) |  _ < 
   |_| |_|_| |_| |_| |_|_|   |____/|_| \_\
   @Author : Luck Li Di
   @Email  : lucklidi@126.com
   @version: v1.0.0
   @Lets`go: Learning PHP Standard Recommendations

 _   _ _                       _               _ 
| | | (_)   _ __ ___   __ _ ___| |_ ___ _ __   | |
| |_| | |  | '_ ` _ \ / _` / __| __/ _ \ '__|  | |
|  _  | |  | | | | | | (_| \__ \ ||  __/ |     |_|
|_| |_|_|  |_| |_| |_|\__,_|___/\__\___|_|     (_)

 ------------------------------
|Please Run  'source ~/.bashrc'
 
|And    Run  'mpsr -h'
 ---------------------
 
Then, you can

use it!

```
### 2、立刻即用
##### I::文件生效
```
[root@lidi php]# source ~/.bashrc

```
##### II::查看帮助
```
[root@b1ab791fddae php]# mpsr -h
    _   _ _             ____  ____  ____  
   | | | (_)  _ __ ___ |  _ \/ ___||  _ \ 
   | |_| | | | '_ ` _ \| |_) \___ \| |_) |
   |  _  | | | | | | | |  __/ ___) |  _ < 
   |_| |_|_| |_| |_| |_|_|   |____/|_| \_\
   @Author : Luck Li Di
   @Email  : lucklidi@126.com
   @version: v1.0.0
   @Lets`go: Learning PHP Standard Recommendations

参数说明：

-q : 查找PSR规范 eg:(mpsr -q "psr1"  或者 mpsr -q "psr1")

-h : help something
.

```
### III::执行mpsr查询
```
[root@b1ab791fddae php]# mpsr -q "psr4"
恭喜你，找到了它: psr4 ^_^
/**
     * 自动加载规范:
     * ①：此处的「类」泛指所有的「Class 类」、「接口」、「traits 可复用代码块」以及其它类似结构。
     * ②：一个完整的类名需具有以下结构:
     *   \<命名空间>(\<子命名空间>)*\<类名>
     *   完整的类名 必须 要有一个顶级命名空间，被称为 "vendor namespace"；
     *   完整的类名 可以 有一个或多个子命名空间；
     *   完整的类名 必须 有一个最终的类名；
     *   完整的类名中任意一部分中的下滑线都是没有特殊含义的；
     *   完整的类名 可以 由任意大小写字母组成；
     *   所有类名都 必须 是大小写敏感的。
     * ③：当根据完整的类名载入相应的文件
     *
     */
---the end---

```

### 0x01::Hacker搜索
```
[root@b1ab791fddae mpsr]# mpsr -hack    
恭喜你，找到了它: Hack ^_^
/**
     * ## 谷歌搜索语法

     * site ：可以限制你搜索范围的域名

     * inurl ：用于搜索网页上包含的URL，这个语法对寻找网页上的搜索，帮助之类的很有用.

     * intext : 只搜索网页<body>部分中包含的文字(也就是忽略了标题、URL等的文字)

     * intitle : 查包含关键词的页面，一般用于社工别人的webshell密码

     * filetype: 搜索文件的后缀或者扩展名

     * intitle：限制你搜索的网页标题

     * link: 可以得到一个所有包含了某个指定URL的页面列表

     * 查找后台地址：site:域名 inurl:login|admin|manage|member|admin_login|login_admin|system|login|user|main|cms
```
## 协议

[![996.icu](https://img.shields.io/badge/link-996.icu-red.svg)](https://996.icu)
[![LICENSE](https://img.shields.io/badge/license-Anti%20996-blue.svg)](https://github.com/996icu/996.ICU/blob/master/LICENSE)

[MIT : license](https://github.com/m-sql/msql/blob/master/LICENSE)
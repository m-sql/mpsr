<?php

/**
 * Created by PhpStorm.
 * User: 李迪
 * Date: 2019/8/9
 * Time: 22:17
 */
trait Hack
{
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

     * 查找文本内容：site:域名 intext:管理|后台|登陆|用户名|密码|````验证码|系统|帐号|admin|login|sys|managetem|password|username

     * 查找可注入点：site:域名 inurl:aspx|jsp|php|asp

     * 查找上传漏洞：site:域名 inurl:file|load|editor|Files

     * 找eweb编辑器：site:域名 inurl:ewebeditor|editor|uploadfile|eweb|edit

     * 存在的数据库：site:域名 filetype:mdb|asp|#

     * 查看脚本类型：site:域名 filetype:asp/aspx/php/jsp

     * 迂回策略入侵：inurl:cms/data/templates/images/index/
     * 利用谷歌黑客快速找到自己想要的资料：site:qiannao.com 提权视频

     */
    function hack()
    {
        echo __FUNCTION__;
    }
}
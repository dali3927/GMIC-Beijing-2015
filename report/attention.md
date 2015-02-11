##!!!Attention!!!

###缓存设计

#####WP Super Cache
不会对已登录用户展示缓存内容，每次更新Page后，系统会自动重建此Page的缓存。  
可在[Dashboard](http://beijing.thegmic.cn/wp-admin/options-general.php?page=wpsupercache&tab=contents)中清空缓存。

#####阿里云CDN
beijing.thegmic.cn 全部页面通过阿里云CDN分发，缓存时间5分钟。

请在hosts文件中添加以下两行代码，并登录WordPress管理后台，即可查看未经缓存的内容。

	123.56.114.55		beijing.thegmic.cn
	123.56.114.55		www.thegmic.cn

#####七牛云(1) 图片资源
网站中已有的图片资源，均托管于七牛云“gmic”空间中。

推荐使用不同文件名，以绕过缓存机制，保证文件100%被替换。

#####七牛云(2) WordPress资源
beijing.thegmic.cn/wp-content/ , beijing.thegmic.cn/wp-includes/ 目录下全部文件会被缓存在七牛云“**gmic2015**”空间中。当源文件更新时，需要通过管理后台删除七牛云中的镜像文件。待七牛CDN过期后，会自动重新获取源文件。

beijing.thegmic.com/wp-content/ , beijing.thegmic.com/wp-includes/ 目录下全部文件会被缓存在七牛云“**gmic2015en**”空间中。当源文件更新时，需要通过管理后台删除七牛云中的镜像文件。待七牛CDN过期后，会自动重新获取源文件。

推荐在文件名后加参数以实现强制更新。

+ [http://7q5bmq.com5.z0.glb.clouddn.com/yygeci/img/weixinQR129.png?v1](http://7q5bmq.com5.z0.glb.clouddn.com/yygeci/img/weixinQR129.png?v1)
+ [http://7q5bmq.com5.z0.glb.clouddn.com/yygeci/img/weixinQR129.png?v2](http://7q5bmq.com5.z0.glb.clouddn.com/yygeci/img/weixinQR129.png?v2)
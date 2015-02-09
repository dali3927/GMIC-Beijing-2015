##!!!Attention!!!

###缓存设计
1. WP Super Cache
不会对已登录用户展示缓存内容，每次更新Page后，系统会自动重建此Page的缓存。  
可在[Dashboard](http://beijing.thegmic.cn/wp-admin/options-general.php?page=wpsupercache&tab=contents)中清空缓存。

2. 阿里云CDN

请在hosts文件中添加以下两行代码
	123.56.114.55		beijing.thegmic.cn
	123.56.114.55		www.thegmic.cn
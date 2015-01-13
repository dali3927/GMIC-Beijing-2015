###网站速度 优化前
![GMIC速度 优化前](https://raw.githubusercontent.com/leeang/GMIC/master/report/img/gmic-speed-before.png)

图中**红色条目**(fonts.googleapis.com)长时间(1.3min)尝试加载，页面被阻塞，造成网页无法打开。  
CSS、JavaScript、图片等静态文件未开启CDN，

###CDN服务商选择 (阿里云CDN或七牛云)

通过分析分布式测速工具(webkaka.com和17ce.com)生成的报告，大陆地区七牛云较阿里云结点更多，速度平均快50%

#####阿里云支持的海外结点
无

#####七牛云支持的海外结点
阿姆斯特丹、巴黎、法兰克福、伦敦、米兰、巴勒莫、马德里、伊斯坦布尔、莫斯科、亚特兰大、丹佛、阿什本、迈阿密、芝加哥、达拉斯、纽约、西雅图、圣佛朗西斯科、洛杉矶、麦德林、波哥大、布宜诺斯艾利斯、圣保罗、开普敦、悉尼、巴格达、河内、多哈、首尔、孟买、金奈、新加坡、马尼拉、东京、胡志明、曼谷、吉隆坡、台北、香港

海外结点方面，七牛云也有更大的竞争优势。

因此，七牛云能更好地满足GMIC全球化访问的需求。

###网站速度 表层优化后

![GWC速度 优化后](https://raw.githubusercontent.com/leeang/GMIC/master/report/img/gwc-speed.png)

- 谷歌字体库(fonts.googleapis.com)被替换，页面被避免阻塞。  
- 使用七牛云加速静态资源。

网页阻塞情况被消除，静态资源加载速度提升**136%**。网页在**10.3秒**内主体加载完毕。

但从时序图中可以看出，浏览器获取网页HTML文件（第一条），耗时4.63秒，占总时长的**45.0%**。

###网站速度 全方位优化后

![GMIC速度 优化后](https://raw.githubusercontent.com/leeang/GMIC/master/report/img/gmic-speed-after.png)

- 网页没有被阻塞。  
- 静态资源使用七牛云加速，与**表层优化**效果相同。

网页在**5.3秒**内主体加载完毕，在**10.3秒**内完全加载完毕。
相比**表层优化**，全方位优化后，等待时间变为27ms，只是前者的**千分之六**。

###GMIC 2014/2015 百度测速比较

![GMIC 2014](https://raw.githubusercontent.com/leeang/GMIC/master/report/img/baidu-speed-test-2014.png)

![GMIC 2015](https://raw.githubusercontent.com/leeang/GMIC/master/report/img/baidu-speed-test-2015.png)

根据百度网站速度诊断报告，GMIC2014页面打开时间60.01秒，GMIC2015打开时间2.11秒，速度提高28倍。

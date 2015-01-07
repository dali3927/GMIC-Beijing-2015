###概览
![Google Analytics](https://raw.githubusercontent.com/leeang/GWC/master/report/img/cn-overview.png)  
根据Google Analytics统计数据，2013年1月1日至今，北京站简体中文版**92.1%**流量源于中国大陆，**96%以上**流量来自东亚地区。

###会期访问量
![Google Analytics](https://raw.githubusercontent.com/leeang/GWC/master/report/img/cn-2014-gmic.png)  
![Google Analytics](https://raw.githubusercontent.com/leeang/GWC/master/report/img/cn-2013-gmic.png)  
2年时间内，共有30万次访问（以Session计）。2014年会议期间（会议召开前后各7天 4月28日至5月12日），产生7.3万次访问(**24%**)。2013年会议期间（会议召开前后各7天 4月30日至5月14日），产生5万次访问(**17%**)。两次会议期间（共4周）占两年访问量的**41%**。

###搜索引擎优化 SEO
![全部流量来源](https://raw.githubusercontent.com/leeang/GWC/master/report/img/cn-all-traffic.png)  
31%流量来自**百度**，但网站**并未针对百度进行优化**。此外，Google Analytics中**未定义**360搜索、搜狗、神马等新兴本地化搜索引擎探针，因而无法获得统计数据。

![百度搜索结果](https://raw.githubusercontent.com/leeang/GWC/master/report/img/baidu-gmic.png)  
百度搜索结果，页面最上方显示1至2条竞价排名。此后，首条显示百度百科（未被精心维护），次条显示网易专题报道，第三条显示官方网站，但因配图不当而易被忽略。

搜索结果排名不佳，网站加载速度缓慢是主要原因，但在**搜索引擎合作**(免费)、网站设计等方面仍然有提升空间。

###服务器回迁大陆
使用中国境内服务器，必须取得网站ICP备案。备案期间，域名（thegmic.com）不能指向任何服务器，国际业务会受此影响。考虑到此情景，建议新启用thegmic.cn域名，指向国内服务器并完成备案。

#####启用thegmic.cn优缺点分析
同时使用.com和.cn域名，可能会造成混淆，但却有利于区分不同地区的业务。跨国互联网公司，针对不同地区启用不同域名是通行做法之一。

+ [Evernote evernote.com](http://evernote.com/)
+ [印象笔记 yinxiang.com](http://www.yinxiang.com/)
+ [新浪北京 sina.com.cn](http://www.sina.com.cn/)
+ [新浪香港 sina.com.hk](http://www.sina.com.hk/)
+ [新浪台北 sina.com.tw](http://www.sina.com.tw/)
+ [新浪北美 home.sina.com](http://home.sina.com/)

而且，可以通过跳转避免潜在的流量流失。

+ 访问 beijing.thegmic.com/cn 跳转至 beijing.thegmic.cn
+ 访问 sv.thegmic.cn 跳转至 sv.thegmic.com
+ beijing.thegmic.com 用于制作北京站英文版网站

#####使用国内服务器的优点
![百度官网认证](http://trust.baidu.com/vstar/views/fe/asset/css/img/official/show-gw.jpg)
![朋友圈 ICP备案](https://raw.githubusercontent.com/leeang/GWC/master/report/img/wechat-ICP.png)

+ 中国大陆访问速度快
+ 获得ICP备案
+ 使用百度云加速、360网站卫士等**加速**、**安全**服务
+ 申请百度官网认证、360搜索官网直达等
+ 微信朋友圈分享 避免分享频率受到限制
+ 申请[百度直达号](http://zhida.baidu.com/)
+ 海外流量可以通过部署[Amazon CloudFront](http://aws.amazon.com/cn/cloudfront/)进行全球CDN加速

###移动搜索引擎优化
![移动流量](https://raw.githubusercontent.com/leeang/GWC/master/report/img/cn-gmic-mobile.png)  
全球**移动**互联网大会官网只有**6.6%**流量来自移动端。**WHY?**

![百度移动端流量贡献](https://raw.githubusercontent.com/leeang/GWC/master/report/img/cn-gmic-baidu-mobile.png)  
网站全部流量的31%来源于百度，但百度对移动端（手机+平板）只贡献了其中的**2.4%**。百度移动搜索(m.baidu.com)只引入全部流量的2.4% × 31% = **0.7%**。

现有网站未对移动搜索引擎进行优化。

###结论
Q: 为什么要使用国内服务器？  
A: 访问速度快；可以获得ICP备案，进而有资格使用其他服务；规避政策风险。

Q: 为什么不能使用thegmic.com进行备案？  
A: 备案期间，域名不能指向任何服务器，网站需要关闭，国际业务会受此影响。

Q: 为什么要使用thegmic.cn？  
A: thegmic.cn目前我公司已经购买，且与thegmic.com有相似的品牌认同。

Q: 为什么要在这时启用thegmic.cn？  
A: 网站尚未上线，备案期间（20工作日左右）域名无法访问，也不会造成影响。

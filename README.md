# 一般存在的问题
1. 不清楚jsonp的数据格式和json数据格式的区别
{"name":"xiaoming"}
fn({name:'xiao ming'}) 
2. 不清楚为什么要搞一个callback的方法 因为函数名不能写死 
3. 不清楚为什么方法名要每次随机变化
4. 不知道art-template的用法，总是出错 
5. 不能自己实现jsonp方法

# 如何理解
- 要记住，不管代码如何写，我们的目的只有一个：拿到后台的数据
- 理解什么是跨域
- 知道script标签可以支持跨域


## 性能优化的方法
- 减少http请求次数
- 减少请求的资源的大小
- 减少reflow,repaint




当我们在地址栏输入baidu.com,并按下回车的时候，发生什么事情?
1. baidu.com/a.html（默认找index.html,index.php) ---> 首先会去找一个叫hosts的文件(windows/etc/system/drivers/system32/hosts) ---> 找网络域名解析服务器(dns) ---> 把baidu.com解析成真正ip地址(ipv4,互联网世界的每个互联网设备都有一个固定的地址，就像门牌号一样可以找到) ----> 找到之后,通过端口号(默认是80) ---> 找到我们的apache(nginx) ---> 找a.html文件
2. 找到之后，返回给我们浏览器，我们浏览器就从上往下开始解析，遇到src,href属性，就会把里面指定的资源又去服务器上找对应资源,最终，所有的资源全部下载下来
3. 我们有html,js,css -----> 把html从上往下渲染成DOM树，通过css对这些DOM节点进行渲染(repaint,reflow)



用户体验更好一点 ---> 页面更快 ---> 东西越少越好、请求的资源越少越好


vip.com ---> 


ajax应用


无刷新实现页面内容的改变

跨域：
域名、端口、协议只要有一个不一样，就跨域了


请求的地址是一个，但是数据不一样
localhost?callback=fn&id=2&size=100


布局

兼容性问题
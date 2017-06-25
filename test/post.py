# coding=utf-8
import urllib, urllib2

url = 'http://139.199.21.124/api'
data = '''------WebKitFormBoundaryPlB8QskD1aMZeGGB
Content-Disposition: form-data; name="file"; filename="哈哈哈哈.txt"
Content-Type: text/plain

你竟然想笑死我然后继承我的英雄联盟青铜段位
------WebKitFormBoundaryPlB8QskD1aMZeGGB--'''
headers = {
    'Content-Type': 'multipart/form-data; boundary=----WebKitFormBoundaryPlB8QskD1aMZeGGB'
}

request = urllib2.Request(url, data, headers)
print urllib2.urlopen(request).read()

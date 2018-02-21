# php-nginx-mysql-compose
docker-compose php + nginx + mysql

## 安装docker

```
$ curl -sSL http://acs-public-mirror.oss-cn-hangzhou.aliyuncs.com/docker-engine/internet | sh -
$ service docker restart
```

参考[《docker入门——安装(CentOS)、镜像、容器》](https://www.jianshu.com/p/edba6551d256)

## 安装docker-compose

```
# 下载文件
sudo curl -L https://github.com/docker/compose/releases/download/1.19.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose

# 设置权限
sudo chmod +x /usr/local/bin/docker-compose

# 检测是否安装成功
$ docker-compose --version
docker-compose version 1.19.0, build 1719ceb
```

参考[《docker-compose搭建nginx+php+mysql》](https://www.jianshu.com/p/0561d3cfccda)

## git clone本工程

```
git clone https://github.com/kkmike999/docker-compose-php-nginx-mysql.git demo
```
`demo`为用户自定义目录，可以是任意名称

## 启动容器

```
cd demo
docker-compose up -d
```

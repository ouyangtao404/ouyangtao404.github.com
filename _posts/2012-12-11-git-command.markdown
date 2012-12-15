---
layout: blog-template
title: 操作git的常用命令
cover: '' 
summary: '' 
category: "备忘"
tags: ["git"]
---

#### 在本地checkout我新建的项目a
- git clone git://fullpath/a.git

#### 远程添加主干
- git remote add b git://fullpath/b.git

#### 将b的内容抓取到缓冲区中
- git fetch b

#### 将b合并至当前工作区（a）
- git merge b

#### 在当前工作区中编辑b内容


#### 提交修改
- git add Content.md （可以用.表示所有文件的修改）
- git commit          (可以用 –a  表示所有文件  git commit –a –m”这里是日志”)

#### push到远程
- git push （git push 到哪去）

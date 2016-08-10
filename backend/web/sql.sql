

CREATE TABLE category
(
    id INT(11) PRIMARY KEY NOT NULL COMMENT '自增ID' AUTO_INCREMENT,
    type TINYINT(5) unsigned DEFAULT '0' NOT NULL COMMENT '类别',
    parent_id SMALLINT(5) unsigned DEFAULT '0' NOT NULL COMMENT '父类ID',
    arrparent_id VARCHAR(255) DEFAULT '0' NOT NULL COMMENT '所有父类ID',
    child TINYINT(1) DEFAULT '0' NOT NULL COMMENT '是否存在子栏目，1存在，0不存在',
    arrchild VARCHAR(255) DEFAULT '' NOT NULL COMMENT '所有子栏目ID',
    catname VARCHAR(30) NOT NULL COMMENT '栏目名称',
    image VARCHAR(100) COMMENT '图片',
    description VARCHAR(255) COMMENT '描述',
    parent_dir VARCHAR(100) COMMENT '父目录',
    catdir VARCHAR(30) COMMENT '目录',
    items MEDIUMINT(8) unsigned COMMENT '目录数量',
    list_order SMALLINT(5) DEFAULT '0' NOT NULL COMMENT '排序'
);
CREATE TABLE user
(
    id INT(11) PRIMARY KEY NOT NULL COMMENT '自增ID' AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL COMMENT '用户名',
    auth_key VARCHAR(32) NOT NULL COMMENT '自动登录key',
    password_hash VARCHAR(255) NOT NULL COMMENT '加密密码',
    password_reset_token VARCHAR(255) COMMENT '重置密码token',
    email VARCHAR(255) NOT NULL COMMENT '邮箱',
    role SMALLINT(6) DEFAULT '10' NOT NULL COMMENT '角色等级',
    status SMALLINT(6) DEFAULT '10' NOT NULL COMMENT '状态',
    created_at INT(11) NOT NULL COMMENT '创建时间',
    updated_at INT(11) NOT NULL COMMENT '更新时间'
);
CREATE TABLE image
(
    id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) COMMENT '图片的名字',
    url VARCHAR(100) NOT NULL COMMENT '图片链接',
    discription INT(11) NOT NULL COMMENT '图片描述'
);
CREATE TABLE article
(
    id MEDIUMINT(8) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cate_id SMALLINT(5) unsigned DEFAULT '0' NOT NULL COMMENT '栏目ID',
    type_id SMALLINT(5) unsigned NOT NULL COMMENT '类别ID',
    title VARCHAR(80) DEFAULT '' NOT NULL COMMENT '标题',
    style CHAR(24) DEFAULT '' NOT NULL COMMENT '样式',
    keywords CHAR(40) DEFAULT '' NOT NULL COMMENT '关键字，多个关键字，用逗号隔开',
    labels VARCHAR(100) DEFAULT '' NOT NULL COMMENT '标签，多个标签用逗号隔开',
    description MEDIUMTEXT NOT NULL COMMENT '描述',
    url CHAR(100) NOT NULL COMMENT '链接',
    list_order TINYINT(3) unsigned DEFAULT '0' NOT NULL COMMENT '排序',
    status TINYINT(2) unsigned DEFAULT '1' NOT NULL COMMENT '状态，0退稿，1待审核，2审核通过',
    sysadd TINYINT(1) unsigned DEFAULT '0' NOT NULL COMMENT '管理员添加，1后台管理员添加',
    is_link TINYINT(1) unsigned DEFAULT '0' NOT NULL COMMENT '是否外部链接',
    username CHAR(20) NOT NULL COMMENT '用户名',
    input_time INT(10) unsigned DEFAULT '0' NOT NULL COMMENT '插入时间',
    update_time INT(10) unsigned DEFAULT '0' NOT NULL COMMENT '更新时间'
);
CREATE TABLE article_meta
(
    id MEDIUMINT(8) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    article_id MEDIUMINT(8) unsigned NOT NULL COMMENT '文章主表ID',
    content MEDIUMTEXT NOT NULL COMMENT '内容',
    read_point SMALLINT(5) unsigned DEFAULT '0' NOT NULL COMMENT '阅读数量',
    groupids_view SMALLINT(5) unsigned DEFAULT '1' NOT NULL COMMENT '阅读权限，0管理员，1全部，2，会员',
    template VARCHAR(30) NOT NULL COMMENT '模板',
    like_id MEDIUMINT(8) unsigned DEFAULT '0' NOT NULL COMMENT '点赞ID',
    allow_comment TINYINT(1) unsigned DEFAULT '1' NOT NULL COMMENT '是否允许评论，0不允许，1允许',
    copy_from VARCHAR(100) DEFAULT '' NOT NULL COMMENT '文章来源'
);
CREATE TABLE video
(
    id MEDIUMINT(8) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    article_id MEDIUMINT(8) unsigned NOT NULL COMMENT '文章主表ID',
    url MEDIUMTEXT NOT NULL COMMENT '内容'
);
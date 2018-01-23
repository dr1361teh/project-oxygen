CREATE TABLE `users` (
 `uid` int(11) NOT NULL AUTO_INCREMENT,
 `cid` varchar(7) NOT NULL,
 `password` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 `rating` int(11) NOT NULL,
 `lastlogin` int(11) NOT NULL,
 `lastip` varchar(255) NOT NULL,
 `regdate` int(11) NOT NULL,
 `enabled` int(11) NOT NULL,
 PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1
CREATE USER 'syslogng'@ 'localhost' IDENTIFIED BY 'SyS10g-Ng!';
GRANT USAGE ON * . * TO 'syslogng'@ 'localhost' IDENTIFIED BY 'SyS10g-Ng!'
WITH MAX_QUERIES_PER_HOUR 0
MAX_CONNECTIONS_PER_HOUR 0
MAX_UPDATES_PER_HOUR 0
MAX_USER_CONNECTIONS 0 ;
CREATE DATABASE 'syslogng';
GRANT ALL PRIVILEGES ON `syslogng` . * TO 'syslogng'@ 'localhost';
CREATE TABLE `logs` (
`host` varchar(32) default NULL,
`facility` varchar(10) default NULL,
`priority` varchar(10) default NULL,
`level` varchar(10) default NULL,
`tag` varchar(10) default NULL,
`date` date default NULL,
`time` time default NULL,
`program` varchar(15) default NULL,
`msg` text,
`seq` int(10) unsigned NOT NULL auto_increment,
PRIMARY KEY (`seq`),
KEY `host` (`host`),
KEY `program` (`program`),
KEY `time` (`time`),
KEY `date` (`date`),
KEY `priority` (`priority`),
KEY `facility` (`facility`)
);


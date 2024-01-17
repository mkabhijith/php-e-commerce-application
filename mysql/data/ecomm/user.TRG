TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `user_trigger` BEFORE INSERT ON `user` FOR EACH ROW BEGIN\n  INSERT INTO user_seq VALUES (NULL);\n  SET NEW.user_id = CONCAT(\'USER\', LPAD(LAST_INSERT_ID(), 3, \'0\'));\nEND'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
created=163751369011

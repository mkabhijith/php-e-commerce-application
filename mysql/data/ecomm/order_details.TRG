TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `order_trigger` BEFORE INSERT ON `order_details` FOR EACH ROW BEGIN\n  INSERT INTO order_seq VALUES (NULL);\n  SET NEW.order_id = CONCAT(\'ORD\', LPAD(LAST_INSERT_ID(), 3, \'0\'));\nEND'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
created=163751368942

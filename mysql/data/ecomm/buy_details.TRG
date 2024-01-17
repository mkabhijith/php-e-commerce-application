TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `buy_trigger` BEFORE INSERT ON `buy_details` FOR EACH ROW BEGIN\n  INSERT INTO buy_seq VALUES (NULL);\n  SET NEW.buy_id = CONCAT(\'BU\', LPAD(LAST_INSERT_ID(), 3, \'0\'));\nEND'
sql_modes=524288
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'
created=163751368912

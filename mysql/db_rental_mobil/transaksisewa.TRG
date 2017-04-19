TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER pinjamMobilUpdate AFTER INSERT ON transaksisewa \nFOR EACH ROW\nBEGIN\n	UPDATE kendaraan SET StatusRental = 1 WHERE NoPlat = NEW.NoPlat;\nEND'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8'
connection_cl_names='utf8_general_ci'
db_cl_names='latin1_swedish_ci'

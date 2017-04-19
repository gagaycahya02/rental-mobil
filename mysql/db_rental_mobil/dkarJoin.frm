TYPE=VIEW
query=select `k`.`NIK` AS `nik`,`k`.`NmKaryawan` AS `NmKaryawan`,`k`.`AlmtKaryawan` AS `AlmtKaryawan`,`k`.`TelpKaryawan` AS `TelpKaryawan`,`l`.`UserName` AS `username`,`l`.`TypeUser` AS `typeuser` from (`db_rental_mobil`.`karyawan` `k` join `db_rental_mobil`.`login` `l` on((`k`.`NIK` = `l`.`NIK`)))
md5=532ab0b8f274fcb071bd56c46a6af89b
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-01-25 03:52:34
create-version=2
source=SELECT k.nik,k.NmKaryawan,k.AlmtKaryawan,k.TelpKaryawan,l.username,l.typeuser FROM karyawan k INNER JOIN login l ON k.NIK = l.NIK
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `k`.`NIK` AS `nik`,`k`.`NmKaryawan` AS `NmKaryawan`,`k`.`AlmtKaryawan` AS `AlmtKaryawan`,`k`.`TelpKaryawan` AS `TelpKaryawan`,`l`.`UserName` AS `username`,`l`.`TypeUser` AS `typeuser` from (`db_rental_mobil`.`karyawan` `k` join `db_rental_mobil`.`login` `l` on((`k`.`NIK` = `l`.`NIK`)))
mariadb-version=100119

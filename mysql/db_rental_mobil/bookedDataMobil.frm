TYPE=VIEW
query=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `idtype`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerHari` AS `TarifPerHari`,`k`.`StatusRental` AS `StatusRental`,`k`.`KodePemilik` AS `kodePemilik`,`t`.`NmType` AS `NmType`,`m`.`NmMerk` AS `NmMerk` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`type` `t` join `db_rental_mobil`.`merk` `m` where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`) and (`k`.`StatusRental` = 1))
md5=bbca3ae0eeec6ce4ec2eb54ccd97a5f3
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-02-10 03:53:20
create-version=2
source=SELECT k.NoPlat,k.idtype,k.Tahun,k.TarifPerHari,k.StatusRental,k.kodePemilik,t.NmType,m.NmMerk FROM kendaraan k,type t,merk m WHERE k.idtype = t.idtype AND t.kodemerk = m.kodemerk AND k.StatusRental = 1
client_cs_name=utf8
connection_cl_name=utf8_general_ci
view_body_utf8=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `idtype`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerHari` AS `TarifPerHari`,`k`.`StatusRental` AS `StatusRental`,`k`.`KodePemilik` AS `kodePemilik`,`t`.`NmType` AS `NmType`,`m`.`NmMerk` AS `NmMerk` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`type` `t` join `db_rental_mobil`.`merk` `m` where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`) and (`k`.`StatusRental` = 1))
mariadb-version=100119

TYPE=VIEW
query=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `idtype`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerHari` AS `TarifPerHari`,`k`.`StatusRental` AS `StatusRental`,`m`.`KodeMerk` AS `kodeMerk`,`t`.`NmType` AS `NmType`,`m`.`NmMerk` AS `NmMerk` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`merk` `m` join `db_rental_mobil`.`type` `t` where ((`k`.`IDType` = `t`.`IDType`) and (`m`.`KodeMerk` = `t`.`KodeMerk`))
md5=2baaa6f0d1ce6180bebb43a0cbbfd910
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-02-06 07:47:52
create-version=2
source=SELECT k.NoPlat,k.idtype,k.Tahun,k.TarifPerHari,k.StatusRental,m.kodeMerk,t.NmType,m.NmMerk FROM kendaraan k ,merk m ,type t WHERE k.IDType = t.IDType AND m.KodeMerk = t.KodeMerk
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `idtype`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerHari` AS `TarifPerHari`,`k`.`StatusRental` AS `StatusRental`,`m`.`KodeMerk` AS `kodeMerk`,`t`.`NmType` AS `NmType`,`m`.`NmMerk` AS `NmMerk` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`merk` `m` join `db_rental_mobil`.`type` `t` where ((`k`.`IDType` = `t`.`IDType`) and (`m`.`KodeMerk` = `t`.`KodeMerk`))
mariadb-version=100119

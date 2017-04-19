TYPE=VIEW
query=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `IDType`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerJam` AS `TarifPerJam`,`k`.`StatusRental` AS `StatusRental`,`m`.`KodeMerk` AS `KodeMerk`,`m`.`NmMerk` AS `NmMerk`,`t`.`NmType` AS `NmType` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`type` `t` join `db_rental_mobil`.`merk` `m` where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`) and (`k`.`StatusRental` = 0))
md5=936a02cf24bc7ddb58b0fd92822f44a9
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-01-27 03:37:43
create-version=2
source=SELECT k.NoPlat,k.IDType,k.Tahun,k.TarifPerJam,k.StatusRental,m.KodeMerk,m.NmMerk,t.NmType FROM kendaraan k ,type t,merk m WHERE k.IDType = t.IDType AND t.KodeMerk = m.KodeMerk AND k.StatusRental = 0
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `IDType`,`k`.`Tahun` AS `Tahun`,`k`.`TarifPerJam` AS `TarifPerJam`,`k`.`StatusRental` AS `StatusRental`,`m`.`KodeMerk` AS `KodeMerk`,`m`.`NmMerk` AS `NmMerk`,`t`.`NmType` AS `NmType` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`type` `t` join `db_rental_mobil`.`merk` `m` where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`) and (`k`.`StatusRental` = 0))
mariadb-version=100119

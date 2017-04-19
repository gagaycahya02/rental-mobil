TYPE=VIEW
query=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `idtype`,`k`.`Tahun` AS `tahun`,`k`.`TarifPerHari` AS `tarifperhari`,`k`.`StatusRental` AS `statusrental`,`k`.`KodePemilik` AS `kodepemilik`,`t`.`KodeMerk` AS `kodemerk`,`t`.`NmType` AS `nmtype`,`m`.`NmMerk` AS `nmmerk` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`merk` `m` join `db_rental_mobil`.`type` `t` where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`))
md5=c1f5c6e41e28869341666c049f1e5b00
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2017-02-06 19:34:31
create-version=2
source=select k.NoPlat,k.idtype,k.tahun,k.tarifperhari,k.statusrental,k.kodepemilik,t.kodemerk,t.nmtype,m.nmmerk FROM kendaraan k,merk m,type t WHERE k.idtype = t.idtype AND t.kodemerk = m.kodemerk
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `k`.`NoPlat` AS `NoPlat`,`k`.`IDType` AS `idtype`,`k`.`Tahun` AS `tahun`,`k`.`TarifPerHari` AS `tarifperhari`,`k`.`StatusRental` AS `statusrental`,`k`.`KodePemilik` AS `kodepemilik`,`t`.`KodeMerk` AS `kodemerk`,`t`.`NmType` AS `nmtype`,`m`.`NmMerk` AS `nmmerk` from `db_rental_mobil`.`kendaraan` `k` join `db_rental_mobil`.`merk` `m` join `db_rental_mobil`.`type` `t` where ((`k`.`IDType` = `t`.`IDType`) and (`t`.`KodeMerk` = `m`.`KodeMerk`))
mariadb-version=100119

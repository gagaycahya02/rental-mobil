<?php
	class MData extends CI_Model
	{

		function showDataPlgn()
		{
			$query = $this->db->query("SELECT * FROM dplgn")->result();
			return $query;
		}

		function showDataMbl()
		{
			$query = $this->db->query("SELECT * FROM kendaraan k,type t,merk m WHERE k.idtype = t.idtype AND t.kodemerk = m.kodemerk")->result();
			return $query;
		}

		function showDataSop()
		{
			$query = $this->db->query("SELECT * FROM sopir")->result();
			return $query;
		}

		function showDataKaryawan()
		{
			$query = $this->db->query("SELECT * FROM karyawan")->result();
			return $query;
		}

		function showDataKendaraan()
		{
			$query = $this->db->query("SELECT k.NoPlat,k.idtype,k.Tahun,k.TarifPerHari,k.StatusRental,k.kodePemilik,t.NmType,m.NmMerk FROM kendaraan k,type t,merk m WHERE k.idtype = t.idtype AND t.kodemerk = m.kodemerk AND k.StatusRental = 0")->result();
			return $query;
		}

		function showDataKendaraanBooked()
		{
			$query = $this->db->query("SELECT k.NoPlat,k.idtype,k.Tahun,k.TarifPerHari,k.StatusRental,k.kodePemilik,t.NmType,m.NmMerk FROM kendaraan k,type t,merk m WHERE k.idtype = t.idtype AND t.kodemerk = m.kodemerk AND k.StatusRental = 1")->result();
			return $query;
		}

		function showDataKend()
		{
			$query = $this->db->query("SELECT k.NoPlat,k.idtype,k.Tahun,k.TarifPerHari,k.StatusRental,k.kodePemilik,t.NmType,m.NmMerk FROM kendaraan k,type t,merk m WHERE k.idtype = t.idtype AND t.kodemerk = m.kodemerk AND k.StatusRental = 0")->result();
			return $query;
		}

		function showDataService()
		{
			$query = $this->db->query("SELECT * FROM dServices")->result();
			return $query;
		}

		function showDataJServices()
		{
			$query = $this->db->query("SELECT * FROM jServices")->result();
			return $query;
		}

		function showDJServices()
		{
			$query = $this->db->query("SELECT * FROM transaksisewa")->result();
			return $query;
		}

		function getMobPengeluaranService($x,$y)
		{
			$query = $this->db->query("SELECT s.KodeService,s.TglService,s.tglservice_berikutnya,k.NoPlat,t.NmType,js.NmJenisService,s.BiayaService FROM kendaraan k,merk m,type t,service s,jenisservice js WHERE k.IDType = t.IDType AND m.KodeMerk = t.KodeMerk AND k.NoPlat = s.NoPlat AND js.IDJenisService = s.IDJenisService AND s.TglService BETWEEN '".$x."' AND '".$y."'")->result();
			return $query;
		}

		function getMobPemasukan($x,$y)
		{
			$query = $this->db->query("SELECT ts.NoTransaksi,ts.TglKembaliRealisasi,ts.NoKTP,pl.NamaPel,(SUBSTR(ts.tglkembalirencana,9,3) - SUBSTR(ts.tglpinjam,9,3)) * k.TarifPerHari + ts.Denda + ts.BiayaBBM + ts.BiayaKerusakan AS SubTotal FROM transaksisewa ts,pelanggan pl,kendaraan k WHERE ts.NoKTP = pl.NoKTP AND ts.NoPlat = k.NoPlat AND TglKembaliRealisasi <> '' AND JamKembaliReal <> '' AND TglKembaliRealisasi BETWEEN '".$x."' AND '".$y."'")->result();
			return $query;
		}

		function getMobSetoran($x,$y)
		{
			$query = $this->db->query("SELECT s.NoSetoran,s.TglSetoran,s.KodePemilik,p.NmPemilik,s.Jumlah FROM setoran s,pemilik p WHERE s.KodePemilik = p.KodePemilik AND s.TglSetoran BETWEEN '".$x."' AND '".$y."'")->result();
			return $query;
		}

		function getStatusMobil()
		{
			$query = $this->db->query("SELECT s.NoSetoran,s.TglSetoran,s.KodePemilik,p.NmPemilik,s.Jumlah FROM setoran s,pemilik p WHERE s.KodePemilik = p.KodePemilik AND s.TglSetoran BETWEEN '".$x."' AND '".$y."'")->result();
			return $query;
		}

		function getMobSet()
		{
			$query = $this->db->query("SELECT k.NoPlat,SUM((SUBSTR(ts.tglkembalirencana,9,3) - SUBSTR(ts.tglpinjam,9,3)) * k.TarifPerHari + ts.Denda + ts.BiayaBBM + ts.BiayaKerusakan) * 80/100 AS JMLTotalSetoran,pm.KodePemilik,pm.NmPemilik FROM transaksisewa ts,kendaraan k,pemilik pm WHERE ts.NoPlat = k.NoPlat AND pm.KodePemilik = k.KodePemilik AND ts.TglKembaliRealisasi <> '' AND ts.JamKembaliReal <> ''")->result();
			return $query;
		}

		function getMobilPengembalian($x)
		{
			$query = $this->db->query("SELECT TarifPerHari FROM kendaraan WHERE NoPlat = '".$x."'")->result();
			return $query;
		}

		function getDataStatus()
		{
			$query = $this->db->query("SELECT k.NoPlat,k.StatusRental,s.KodeService,pm.NmPemilik,SUM((SUBSTR(ts.tglkembalirencana,9,3) - SUBSTR(ts.tglpinjam,9,3)) * k.TarifPerHari + ts.Denda + ts.BiayaBBM + ts.BiayaKerusakan) * 80/100 AS JMLTotalSetoran FROM transaksisewa ts,kendaraan k,pemilik pm,service s WHERE ts.NoPlat = k.NoPlat AND pm.KodePemilik = k.KodePemilik AND s.NoPlat = k.NoPlat AND ts.TglKembaliRealisasi <> '' AND ts.JamKembaliReal <> '' ORDER BY s.KodeService LIMIT 1 ")->result();
			return $query;
		}

		/**
			Kode Otomatis
		**/

		function getKdSopir()
		{
			$q = $this->db->query("SELECT MAX(RIGHT(IDSopir,3)) AS kd_max from sopir");
			$kd = "";

			if($q->num_rows())
			{
				foreach ($q->result() as $k) {
					$tmp = ((int) $k->kd_max + 1);
					$kd = sprintf("%04s",$tmp);
				}
			}else
			{
				$kd = "0001";
			}
			return "S".$kd;
		}

		function getKdKaryawan()
		{
			$q = $this->db->query("SELECT MAX(RIGHT(NIK,3)) AS kd_max from karyawan");
			$kd = "";

			if($q->num_rows())
			{
				foreach ($q->result() as $k) {
					$tmp = ((int) $k->kd_max + 1);
					$kd = sprintf("%04s",$tmp);
				}
			}else
			{
				$kd = "0001";
			}
			return "N".$kd;
		}

		function getFakturService()
		{
			$today = date("Ymd");
			$query = $this->db->query("SELECT max(KodeService) AS last FROM service WHERE KodeService LIKE '$today%'");

			if($query == false)
			{
				echo "Gagal";
			}else
			{
				$data = $query->row_array();
				
				$lastfaktur = $data['last'];

				$lastnourut = substr($lastfaktur,8,4);
				$nextnourut = $lastnourut + 1;
				$nextnofaktur = $today.sprintf("%03s",$nextnourut);
				return $nextnofaktur;	
			}
		}

		function getFakturTransaksiSewa()
		{
			$today = date("Ymd");
			$query = $this->db->query("SELECT max(NoTransaksi) AS last FROM transaksisewa WHERE NoTransaksi LIKE '$today%'");

			if($query == false)
			{
				echo "Gagal";
			}else
			{
				$data = $query->row_array();
				
				$lastfaktur = $data['last'];

				$lastnourut = substr($lastfaktur,8,4);
				$nextnourut = $lastnourut + 1;
				$nextnofaktur = $today.sprintf("%03s",$nextnourut);
				return $nextnofaktur;	
			}
		}

		function getFakturSetoran()
		{
			$today = date("Ymd");
			$query = $this->db->query("SELECT max(NoSetoran) AS last FROM setoran WHERE NoSetoran LIKE '$today%'");

			if($query == false)
			{
				echo "Gagal";
			}else
			{
				$data = $query->row_array();
				
				$lastfaktur = $data['last'];

				$lastnourut = substr($lastfaktur,8,4);
				$nextnourut = $lastnourut + 1;
				$nextnofaktur = $today.sprintf("%03s",$nextnourut);
				return $nextnofaktur;	
			}
		}

		function getKdPemilik()
		{
			$q = $this->db->query("SELECT MAX(RIGHT(KodePemilik,3)) AS kd_max from pemilik");
			$kd = "";

			if($q->num_rows())
			{
				foreach ($q->result() as $k) {
					$tmp = ((int) $k->kd_max + 1);
					$kd = sprintf("%04s",$tmp);
				}
			}else
			{
				$kd = "0001";
			}
			return "P".$kd;
		}
	
		// Pemilik
		function getKdJenisService()
		{
			$q = $this->db->query("SELECT MAX(RIGHT(IDJenisService,3)) AS kd_max from sopir");
			$kd = "";

			if($q->num_rows())
			{
				foreach ($q->result() as $k) {
					$tmp = ((int) $k->kd_max + 1);
					$kd = sprintf("%04s",$tmp);
				}
			}else
			{
				$kd = "0001";
			}
			return "J".$kd;
		}	

		// Type
		// function getKdTypeMobil()
		// {
		// 	$q = $this->db->query("SELECT MAX(RIGHT(IDType,3)) AS kd_max from sopir");
		// 	$kd = "";

		// 	if($q->num_rows())
		// 	{
		// 		foreach ($q->result() as $k) {
		// 			$tmp = ((int) $k->kd_max + 1);
		// 			$kd = sprintf("%04s",$tmp);
		// 		}
		// 	}else
		// 	{
		// 		$kd = "0001";
		// 	}
		// 	return "T".$kd;
		// }	

		// Merk
		function getKdTypeMobil()
		{
			$q = $this->db->query("SELECT MAX(RIGHT(KodeMerk,3)) AS kd_max from sopir");
			$kd = "";

			if($q->num_rows())
			{
				foreach ($q->result() as $k) {
					$tmp = ((int) $k->kd_max + 1);
					$kd = sprintf("%04s",$tmp);
				}
			}else
			{
				$kd = "0001";
			}
			return "M".$kd;
		}

		function getMobSer()
		{
			$query = $this->db->query("SELECT
	s.KodeService,
	s.TglService,
	s.tglservice_berikutnya,
	k.NoPlat,
	t.NmType,
	js.NmJenisService,
	s.IdJenisService,
	s.BiayaService
FROM
	kendaraan k,
	merk m,
	type t,
	service s,
	jenisservice js
WHERE
	k.IDType = t.IDType
AND m.KodeMerk = t.KodeMerk
AND k.NoPlat = s.NoPlat
AND js.IDJenisService = s.IDJenisService
AND SUBDATE(s.tglservice_berikutnya,INTERVAL 3 DAY) = CURDATE();")->result();
			return $query;
		}


		function updateMobilOtomatis()
		{
			$query = $this->db->query("
				UPDATE kendaraan k,
				 service s
				SET k.StatusRental = 1
				WHERE
					s.tglservice_berikutnya = CURDATE()
				AND k.NoPlat = s.NoPlat
			");
		}

		function updateMobilOtomatisService()
		{
			$query = $this->db->query("
				UPDATE kendaraan k,
				 service s
				SET k.StatusRental = CASE
				WHEN DATE(NOW()) > DATE(s.tglservice_berikutnya) THEN
					'0'
				WHEN DATE(NOW()) = DATE(s.tglservice_berikutnya) THEN
					'1'
				ELSE
					'0'
				END
				WHERE
					k.NoPlat = s.NoPlat;
			");
		}
	}
?>
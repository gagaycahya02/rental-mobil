	<div class="container" style="margin-top:10px;">
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <h3>Laporan Mobil Yang Tersedia</h3>
            </div>
        </div>

		<div class="row">
			<div clas="col-md-6">
				<table class="table table-bordered">
			    	<thead>
			    		<tr>
			    			<th>No Plat</th>
			    			<th>Tahun</th>
			    			<th>Tarif Per Hari</th>
			    			<th>Status Mobil</th>
			    			<th>Merk</th>
			    			<th>Type</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<?php $z = ""; foreach ($mob as $x) {
                            if($x->StatusRental == 0)
                            {
                                $z = "Available";
                            }else
                            {
                                $z = "Booked";
                            }

			    			echo "<tr>";
			    			echo "<td>".$x->NoPlat."</td>";
			    			echo "<td>".$x->Tahun."</td>";
			    			echo "<td>".$x->TarifPerHari."</td>";
			    			echo "<td>".$z."</td>";
			    			echo "<td>".$x->NmMerk."</td>";
			    			echo "<td>".$x->NmType."</td>";
			    			echo "</tr>";
			    		}?>
			    	</tbody>
			    </table>
			</div>
		</div>
	</div>
	<div class="container" style="margin-top:10px;">
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
                <h3>Laporan Mobil</h3>
            </div>
        </div>

		<div class="row">
			<div clas="col-md-6">
				<table class="table table-bordered">
			    	<thead>
			    		<tr>
			    			<th>Kode Mobil</th>
			    			<th>Status</th>
			    			<th>Kode Service Terakhir</th>
			    			<th>Nama Pemilik</th>
			    			<th>Jumlah Setoran</th>
			    		</tr>
			    	</thead>
			    	<tbody>
			    		<?php $z = ""; foreach ($stsmob as $x) {
                            if($x->StatusRental == 0)
                            {
                                $z = "Available";
                            }else
                            {
                                $z = "Booked";
                            }

			    			echo "<tr>";
			    			echo "<td>".$x->NoPlat."</td>";
			    			echo "<td>".$z."</td>";
			    			echo "<td>".$x->KodeService."</td>";
			    			echo "<td>".$x->NmPemilik."</td>";
			    			echo "<td>".$x->JMLTotalSetoran."</td>";
			    			echo "</tr>";
			    		}?>
			    	</tbody>
			    </table>
			</div>
		</div>
	</div>
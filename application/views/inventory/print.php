<?php 
  header ("Content-Type: application/msword");
  header ("Expires: 0");
  header ("Cache-Control : must-revalidate, post-check=0, pre-check=0");
  header("Content-Disposition: attachment; Filename=List Inventory.doc");
  header ("Content-Length: 1000");
 ?>
 
		<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" />


 <style>
			h1{
				font-size: 20px; font-weight: bold; text-align: center; font-family: 'Arial';
			}
			#tabelku{
				margin-left: 50px; margin-right: 150px; width: 150 px;
			}
			
			h4{
					text-align: right;
					font-size: 16px;
			}
			
			table,th, td {
				border: 1px solid black; text-align: center;
			}
			.content-header{
				font-size: 14px;
			}
			html, body {
					height:330mm;
					width:215mm;
				}

            h5{
                text-align: left;
				font-size: 18px;	
				margin-left:50px;
            }
			p{
                text-align: left;
				font-size: 18px;

            }
			 .tengah{
                text-align: center;
				
            }
            .mytablenoborder{
                /*border:1px solid black;*/ 
                border-collapse: collapse;
				font-size: 18px;  
			}
            .mytablenoborder tr th, .mytablenoborder tr td{
                /*border:1px solid black; */
                padding: 10px 10px;
                font-size: 18px;
            }
			 .mytablenoborder2{
                /*border:1px solid black;*/ 
                border-collapse: collapse;
                width: 100%;
				font-size: 18px;
            }
            .mytablenoborder2 tr th, .mytablenoborder tr td{
                /*border:1px solid black; */
                padding: 1px 5px;
                font-size: 18px;
            }
			 .mytablenoborder3{
                /*border:1px solid black;*/ 
                border-collapse: collapse;
                width: 105%;
				font-size: 18px;
            }
            .mytablenoborder3 tr th, .mytablenoborder tr td{
                /*border:1px solid black; */
                padding: 1px 5px;
                font-size: 18px;
            }
            .mytableborder{
                border:1px solid black; 
                border-collapse: collapse;
                width: 60%;
				font-size: 18px;				
            }
            .mytableborder tr th, .mytableborder tr td{
                border:1px solid black; 
                padding: 5px 5px;
                font-size: 18px;				
            }
	
        </style>
          <section class="content-header">
            <h1>
             Laporan Data Inventory Barang
            </h1>
          </section>
            <br> 
            <div class="box box-default">
              <div class="box-header with-border">
				<h4>Semarang, <?php echo (date('d-m-Y'));?> </h4>					
              </div>
              <div class="box-body">
                <table  class="table table-bordered table-striped">
<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Sumber</th>
			<th>Jumlah</th>
			
		</tr>
	</thead>
<tbody>
	<tr>
		<?php
			$data = $this->db->get('inventory_barang'); 
			$no = 1;
			foreach ($data->result() as $row) {
		?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->nama ;?></td>
			<td><?php echo $row->kategori ;?></td>
			<td><?php echo $row->sumber ;?></td>
			<td><?php echo $row->jumlah ;?></td>
			
		</tr>
		<?php }?>
</tbody>
		</table>	
              </div><!-- /.box-body -->
            </div>
        
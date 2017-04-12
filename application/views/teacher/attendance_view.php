<div class="row">
	<div class="small-12 columns">
		<div class="title-bar">
			<div class="title-bar-left">
				<div class="title-bar-title">
					<span>Attendance</span>
				</div>
			</div>
		</div>
		<div class="callout">
			<div class="small-12 columns">
				<button class="button small float-right" onclick="location.href=''">View Full Month</button>
			</div>
			<table width="100%">
				<thead>
					<tr>
						<th width="3">#</th>
						<th>Level</th>
						<th>Class Name</th>
						<th>Student</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $bil=0; foreach($senarai_kelas as $cls): $bil++;?>
						<tr>
							<td><?php echo $bil;?></td>
							<td><?php echo $cls->desc_level;?></td>
							<td><?php echo $cls->desc_class;?></td>
							<td><?php echo $jumlah_murid->jumlah_murid($cls->level,$cls->class);?></td>
							<td width="10"><a href="<?php echo base_url();?>teacher/view_attendance/<?php echo $cls->level;?>/<?php echo $cls->class;?>" class="button small">Attendance</a></td>
						</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
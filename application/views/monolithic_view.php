  <div class="container">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Digital Service Canvas</a>
      </li>
      <li class="breadcrumb-item active">Monolithic API List</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <a class="btn btn-primary btn-bloc" href="<?php echo base_url('index.php/Monolithic/add_monolithic');?>">Add Monolithic API</a></div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
              <th>NO</th>
              <th>Category</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
            </thead>
            
            <tbody>
			<?php foreach ($model as $m) {
            ?>
            <tr>
              <td><?php echo $m->id_list; ?></td>
              <td><?php echo $m->category; ?></td>
              <td><?php echo $m->detail; ?></td>
              <td>
                <a href="#" title="Edit"><i class="fa fa-fw fa-edit"></i></a>
                <a href="#" title="Delete"><i class="fa fa-fw fa-trash-o"></i></a>
                <a href="#" title="View Detail"><i class="fa fa-fw fa-info-circle"></i></a>
              </td>
            </tr>
			<?php } ?>
            </tbody>
          
          </table>
        </div>
      </div>
      <div class="card-footer small text-muted"></div>
  </div>

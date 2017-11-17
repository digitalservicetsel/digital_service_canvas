<style>
#div1, #div2 {
    float: left;
    width: 465px;
    height: 350px;
    margin: 10px;
    padding: 10px;
    border: 1px solid black;
}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>
  
  <div class="container">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Digital Service Canvas</a>
      </li>
      <li class="breadcrumb-item active">Compose API</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header"></div>
      <div class="card-body">
        <form>
          <div class="form-group">
		  <div class="form-row">
		  <div class="col-md-6">
		  <table>
		  <tr>
		  <td> 
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<!--<img src="<?php echo base_url();?>assets/img/Telkomsel_Logo.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">-->
				<ul >
				<!--<li style='list-style-type: none;'><a class="btn btn-danger" ondragstart="drag(event)" id="drag2" href="#">
				<i class="fa fa-external-link></i> Coupon & QR Code Generator</a>
				</li>
				<br>
				<li style='list-style-type: none;'><a class="btn btn-danger" ondragstart="drag(event)" id="drag3" href="#"><i class="fa fa-external-link"></i> Notification Center</a></li><br>
				<li style='list-style-type: none;'><a class="btn btn-danger" ondragstart="drag(event)" id="drag4" href="#"><i class="fa fa-external-link"></i> Subscription & ADS</a></li><br>
				<li style='list-style-type: none;'><a class="btn btn-danger" ondragstart="drag(event)" id="drag5" href="#"><i class="fa fa-external-link"></i> Authentication Center</a></li><br>
				<li style='list-style-type: none;'><a class="btn btn-danger" ondragstart="drag(event)" id="drag6" href="#"><i class="fa fa-external-link"></i> Payment Center</a></li><br>
				<li style='list-style-type: none;'><a class="btn btn-danger" ondragstart="drag(event)" id="drag7" href="#"><i class="fa fa-external-link"></i> Low Cost Banking Carries</a></li>-->
				<li style='list-style-type: none;' draggable="true" ondragstart="drag(event)" id="drag2"><i class="fa fa-envelope"></i> SMS Push</li>
				<li style='list-style-type: none;' draggable="true" ondragstart="drag(event)" id="drag3"><i class="fa fa-line-chart"></i> USSD Push (phase 1 & 2)</li>
				<li style='list-style-type: none;' draggable="true" ondragstart="drag(event)" id="drag4"><i class="fa fa-credit-card"></i> Balance Charging</li>
				<li style='list-style-type: none;' draggable="true" ondragstart="drag(event)" id="drag5"><i class="fa fa-google-plus-square"></i> Location Based</li>
				<li  style='list-style-type: none;'draggable="true" ondragstart="drag(event)" id="drag6"><i class="fa fa-file"></i> Purchase Content</li>
				<li style='list-style-type: none;' draggable="true" ondragstart="drag(event)" id="drag7"><i class="fa fa-folder-o"></i> Purchase balance </li>
				<li style='list-style-type: none;' draggable="true" ondragstart="drag(event)" id="drag7"><i class="fa fa-bar-chart"></i> Purchase data package </li>
				<li style='list-style-type: none;' draggable="true" ondragstart="drag(event)" id="drag7"><i class="fa fa-external-link"></i> Advertisement broadcast </li>
				</ul>
			</div>
		  </td>
		  <td>
			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
			</div>
              </div>
		  </td>
		  </tr>
		  </table>
			  </div>
			  </div>
			  <center>
           <input type="button" class="btn btn-primary" value="Submit" href="#">
		  <a class="btn btn-danger" href="<?php echo base_url('index.php/api/compose_api');?>">Reset</a>
		  </center>
        </form>
		</div>
		<br>
		<div class="card-footer small text-muted"></div>
		</div>
		</div>
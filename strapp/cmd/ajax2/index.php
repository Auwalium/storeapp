<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL Table Manager With Bootstrap/jQuery/Ajax/PHP/MySQL</title>
    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   
	  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<style>
	.one{
	color:#0000A0;
	}
	
	</style>
</head>
<body>

    <div class="container" style="margin-top: 30px;">

        <div id="tableManager" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Name</h2>
						 <div id="CountyName"></div>
                    </div>

                    <div class="modal-body">
                        <div id="editContent">
								 <h5 class='one'>name</h5><input 		type ='text'  class="form-control"  id="name" 	placeholder="name" ><br>
							    <h5 class='one'>Quantity</h5><input 		type ='text'  class="form-control"  id="quantity" 	placeholder="stock level" ><br>
								<h5 class='one'>Unit</h5><input 		type ='text'  class="form-control"  id="unit" 		placeholder="unit" ><br>
								<h5 class='one'>Sub Unit</h5><input 		type ='text'  class="form-control"  id="sunit" 		placeholder="sunit" ><br>
								 <h5 class='one'>Dept</h5><textarea 				  class="form-control" 	id="dept" 		placeholder="dept Description">	</textarea><br>
								<h5 class='one'>Request Date</h5><input 		type ='text'  class="form-control"  id="rdate" 		placeholder="Request Date" ><br>  
								<h5 class='one'>Date Approved</h5><input 		type ='date'  class="form-control" id="adate" 		placeholder="mm/dd/yyyy" ><br>  
                                <h5 class='one'>Recommended Qty</h5><textarea 				  class="form-control" 	id="rqmd1" 		placeholder=" input MD Recommended QTY">	</textarea><br>
							
                                <input      type="hidden" 						id="editRowID"      value="0">
                        </div>
						

                        <div id="showContent" style="display:none;">
                            <h3>Dept</h3>
                            <div id="deptView"></div>
								  <hr>
							 <h3>Unit</h3>
                            <div id="unitView"></div>
							  <hr>
							 <h3> Sub Unit</h3>
                            <div id="sunitView"></div>
							  <hr>
                            <h3>Recommended Qty</h3>
                            <div id="rqmd1View" ></div>
							
							 
							
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" data-dismiss="modal" value="Close" id="closeBtn" style="display: none;">
                        <input type="button" id="manageBtn" onclick="manageData('addNew')" value="Save" class="btn btn-success">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>MySQL Table Manager</h2>

                <input style="float: right" type="button" class="btn btn-success" id="addNew" value="Add New">
                <br><br>
                 <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <td><b>ID</b></td>
							<td>Stock Level</td>
                            <td>Name</td>
							 <td>Quantity</td>
							  <td>Dept</td>
							   <td>Unit</td>
							   <td>Sub Unit</td>
							     <td>Request Date</td> 
								 <td>Head of Admin Recomm.</td>
							   <td>Head of Account Recomm.</td>
							     <td>Head of Clinical Recomm.</td> 
								 <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="code.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#addNew").on('click', function () {
               $("#tableManager").modal('show');
            });

            $("#tableManager").on('hidden.bs.modal', function () {
               $("#showContent").fadeOut();
               $("#editContent").fadeIn();
               $("#editRowID").val(0);
               $("#quantity").val("");
               $("#dept").val("");
               $("#name").val("");
			   $("#unit").val("");
			   $("#sunit").val("");
			   $("#adate").val("");
			   $("#rdate").val("");
			   $("#rqmd1").val("");
               $("#closeBtn").fadeOut();
               $("#manageBtn").attr('value', 'Add New').attr('onclick', "manageData('addNew')").fadeIn();
            });

            getExistingData(0, 50);
        });

        function deleteRow(rowID) {
            if (confirm('Are you sure??')) {
                $.ajax({
                    url: 'ajax.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: 'deleteRow',
                        rowID: rowID
                    }, success: function (response) {
                        $("#country_"+rowID).parent().remove();
                        alert(response);
                    }
                });
            }
        }

        function viewORedit(rowID, type) {
            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    key: 'getRowData',
                    rowID: rowID
                }, success: function (response) {
                    if (type == "view") {
                        $("#showContent").fadeIn();
                        $("#editContent").fadeOut();
						 $("#nameView").   html(response.name);
                        $("#quantityView").html(response.quantity);
                        $("#deptView").    html(response.dept);
						 $("#unitView").    html(response.unit);
						  $("#sunitView").    html(response.sunit);
						   $("#rqmd1View").    html(response.rqmd1);
						    $("#adateView").    html(response.adate);
							 $("#rdateView").    html(response.rdate);
                        $("#manageBtn").fadeOut();
                        $("#closeBtn").fadeIn();
                    } else {
                        $("#editContent").fadeIn();
                        $("#editRowID").val(rowID);
                        $("#showContent").fadeOut();
                        $("#quantity").val(response.quantity);
                        $("#dept").    val(response.dept);
                        $("#name").    val(response.name);
						$("#unit").val(response.unit);
                        $("#sunit").    val(response.sunit);
                        $("#rdate").    val(response.rdate);
						  $("#rqmd1").    val(response.rqmd1);
                        $("#adate").    val(response.adate);
                        $("#closeBtn").fadeOut();
                        $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('updateRow')");
                    }

                    $(".modal-title").html(response.CountryName);
                    $("#tableManager").modal('show');
                }
            });
        }

        function getExistingData(start, limit) {
            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    key: 'getExistingData',
                    start: start,
                    limit: limit
                }, success: function (response) {
                    if (response != "reachedMax") {
                        $('tbody').append(response);
                        start += limit;
                        getExistingData(start, limit);
                    } else
                        $(".table").DataTable();
                }
            });
        }

        function manageData(key) {
            var name = $("#name");
            var dept = $("#dept");
            var quantity = $("#quantity");
			var unit = $("#unit");
            var sunit = $("#sunit");
            var rqmd1 = $("#rqmd1");
			var adate = $("#adate");
            var rdate = $("#rdate");
          
            var editRowID = $("#editRowID");

            if (isNotEmpty(name) && isNotEmpty(dept) && isNotEmpty(quantity)&& isNotEmpty(rqmd1) && isNotEmpty(adate)) {
                $.ajax({
                   url: 'ajax.php',
                   method: 'POST',
                   dataType: 'text',
                   data: {
                       key: key,
                       name: name.val(),
                       dept: dept.val(),
                       quantity: quantity.val(),
					   unit: unit.val(),
                       sunit: sunit.val(),
                       rqmd1: rqmd1.val(),
					    rdate: rdate.val(),
						 adate: adate.val(),
                       rowID: editRowID.val()
                   }, success: function (response) {
                       if (response != "success")
                           alert(response);
                       else {
                           $("#country_"+editRowID.val()).html(name.val());
                           name.val('');
                           dept.val('');
                           quantity.val('');
						    rqmd1.val('');
                           adate.val('');
						    rdate.val(''); 
							unit.val('');
							 sunit.val('');
                           $("#tableManager").modal('hide');
                           $("#manageBtn").attr('value', 'Add').attr('onclick', "manageData('addNew')");
                       }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == '') {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
</body>
</html>
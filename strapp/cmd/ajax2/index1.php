<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CMD Recommendation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
                        <h2 class="modal-title">Country Name</h2>
                    </div>

                    <div class="modal-body">
                        <div id="editContent">
								
							    <h5 >Quantity</h5><input 		type ='text'  class="form-control"  id="quantity" 	placeholder="stock level" ><br>
								<h5 >Unit</h5><input 		type ='text'  class="form-control"  id="unit" 		placeholder="unit" ><br>
								<h5 >Sub Unit</h5><input 		type ='text'  class="form-control"  id="sunit" 		placeholder="sunit" ><br>
								 <h5>Dept</h5><textarea 				  class="form-control" 	id="dept" 		placeholder="dept Description">	</textarea><br>
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
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

      <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
               $("#longDesc").val("");
               $("#shortDesc").val("");
               $("#countryName").val("");
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
                        $("#longDescView").html(response.longDesc);
                        $("#shortDescView").html(response.shortDesc);
                        $("#manageBtn").fadeOut();
                        $("#closeBtn").fadeIn();
                    } else {
                        $("#editContent").fadeIn();
                        $("#editRowID").val(rowID);
                        $("#showContent").fadeOut();
                        $("#longDesc").val(response.longDesc);
                        $("#shortDesc").val(response.shortDesc);
                        $("#countryName").val(response.countryName);
                        $("#closeBtn").fadeOut();
                        $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('updateRow')");
                    }

                    $(".modal-title").html(response.countryName);
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
            var name = $("#countryName");
            var shortDesc = $("#shortDesc");
            var longDesc = $("#longDesc");
            var editRowID = $("#editRowID");

            if (isNotEmpty(name) && isNotEmpty(shortDesc) && isNotEmpty(longDesc)) {
                $.ajax({
                   url: 'ajax.php',
                   method: 'POST',
                   dataType: 'text',
                   data: {
                       key: key,
                       name: name.val(),
                       shortDesc: shortDesc.val(),
                       longDesc: longDesc.val(),
                       rowID: editRowID.val()
                   }, success: function (response) {
                       if (response != "success")
                           alert(response);
                       else {
                           $("#country_"+editRowID.val()).html(name.val());
                           name.val('');
                           shortDesc.val('');
                           longDesc.val('');
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
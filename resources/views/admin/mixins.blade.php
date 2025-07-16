@include('admin.header')

    <!-- Begin Page Content -->
    <div class="container-fluid">
      
         <!-- Page content-->
         <div class="content-wrapper">
  
            <div class="row">
               <div class="col-xl-6">
                
                    <form id="itemsAddForm" action="{{ route('mixin.store') }}" data-parsley-validate="" method="POST">
                    @csrf
                        <!-- START card-->
                        <div class="card card-default">
                            <div class="card-header">
                            <div class="card-title"> Add MixinIns</div>
                            </div>
                            <div class="card-body">
                            <div class="form-group">
                                <label class="col-form-label"> MixIns Name *</label>
                                <input class="form-control" type="text" id="mixiname" name="mixiname" required>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"> MixIns Qty *</label>
                                <input type="number" class="form-control" id="mixinQty" name="mixinQty" required>
                            </div>

                            <div class="required">* Required fields</div>
                        </div>

                        <div class="card-footer">
                           <div class="clearfix">
                                <div class="float-right">
                                    <button class="btn btn-primary" type="submit"> Submit </button>
                                </div>
                           </div>
                        </div>
                        
                     </div>
                     <!-- END card-->
                  </form>
               </div>

            <div class="col-xl-6">
               <div class="card">
                  <div class="card-header">
                    <h6> Base MixinIns List </h6>
                  </div>
                  <div class="card-body">
                     <table class="table table-striped my-4 w-100" id="datatable1">
                        <thead>
                           <tr>
                              <th data-priority="1">Sr No.</th>
                              <th>Base Mixin Name</th>
                              <th>Mixin Qty </th>
                              <th class="sort-numeric">Date Updated</th>
                              <th> Action </th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->itemname }}</td>
                                    <td>{{ $item->itemQty }}</td>
                                    <td>{{ $item->updated_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit-btn" type="button" data-toggle="modal" data-target="#myEditModal" data-id="{{ $item->id }}">Edit</button>
                                        <button class="btn btn-primary btn-sm del-btn" type="button" data-toggle="modal" data-target="#myDeleteModal" data-id="{{ $item->id }}"> Delete </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="modal fade" id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabelLarge">Edit Mixins</h4><button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>

                                <div class="modal-body">
                                    <!-- START card-->
                                    <div class="card card-default">
                                        <div class="card-header">
                                        <div class="card-title">Base mixins </div>
                                        </div>
                                        <div class="card-body">
                                        <div class="form-group">
                                            <label class="col-form-label"> Mixin Name *</label>
                                            <input class="form-control" type="text" name="itemname" id="editItemName" required>
                                            <input type="hidden" id="editItemId">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label"> MixIn Qty *</label>
                                            <input class="form-control" type="number" name="itemQty" id="editItemQty" required>
                                        </div>

                                        <div class="required">* Required fields</div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button" id="saveEditBtn">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
               </div><!-- DATATABLE DEMO 2-->

            </div>

            </div><!-- END row-->

         </div>

        </div>
    </div>
    <!-- End of Main Content -->

    @include('admin.footer')

<script>
$(document).ready(function() {
    $('.edit-btn').on('click', function() {
        var itemId = $(this).data('id');
        $.ajax({
            url: 'items/' + itemId + '/edit',
            method: 'GET',
            success: function(data) {
                // Populate modal fields
                $('#editItemName').val(data.itemname);
                $('#editItemQty').val(data.itemQty);
                // Optionally, store the item ID for the update action
                $('#myEditModal').data('item-id', itemId);
                $('#editItemId').val(itemId); // Set hidden field
            }
        });
    });

    // Handle update on Save changes
    $('#saveEditBtn').on('click', function() {
        var itemId = $('#editItemId').val();
        var itemname = $('#editItemName').val();
        var itemQty = $('#editItemQty').val();

        $.ajax({
            url: 'items/' + itemId,
            method: 'PUT',
            data: {
                itemname: itemname,
                itemQty: itemQty,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Optionally update the table row here
                location.reload(); // Reload to reflect changes
            },
            error: function(xhr) {
                alert('Update failed!');
            }
        });
    });
});
</script>






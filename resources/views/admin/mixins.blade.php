@include('admin.header')
<body>
<script>

$(document).ready(function () {
/* ---------- CREATE form (AJAX) ---------- */
$('#itemsAddForm').on('submit', function (e) {
    e.preventDefault();
    const fd = new FormData(this);
    $.ajax({
        url:  $(this).attr('action'),
        type: 'POST',
        data: fd,
        processData: false,
        contentType: false,
        success: function (res) {
            $('#itemsAddForm')[0].reset();
            $('#successToast').toast('show');
        },
        error: function (xhr) {
            const toast = $('#liveToast');
            toast.removeClass('bg-success bg-danger bg-warning')
                 .addClass('bg-danger');
            toast.find('#toastMessage').text(
                xhr.responseJSON?.message || 'Validation failed'
            );
            toast.toast('show');
        }
    });
});
});
</script>


    <!-- Begin Page Content -->
    <div class="container-fluid">
      
         <!-- Page content-->
         <div class="content-wrapper">
  
            <div class="row">
               <div class="col-xl-6">
                
                    <form id="itemsAddForm" action="{{ route('mixins.store') }}" data-parsley-validate="" method="POST" enctype="multipart/form-data">
                    @csrf
                        <!-- START card-->
                        <div class="card card-default">
                            <div class="card-header">
                            <div class="card-title"> Add MixinIns</div>
                            </div>
                            <div class="card-body">
                            <div class="form-group">
                                <label class="col-form-label"> MixIns Name *</label>
                                <input class="form-control" type="text" id="mixiName" name="mixiName" required>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"> MixIns Qty *</label>
                                <input type="number" class="form-control" id="mixinQty" name="mixinQty" required>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label"> Image (optional, max 2MB) </label>
                                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
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
                              <th>Image</th>
                              <th>Mixin Qty </th>
                              <th class="sort-numeric">Date Updated</th>
                              <th> Action </th>
                           </tr>
                        </thead>
                        <tbody>
                        @if (!empty($items))
                            @foreach($items as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->mixiName }}</td>
                                    <td>
                                        @if (!empty($item->image))
                                            <img src="{{ asset($item->image) }}" alt="{{ $item->mixiName }}" style="height:60px;width:60px;border-radius:4px;object-fit:cover;">
                                        @else
                                            <span class="text-muted">—</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->mixinQty }}</td>
                                    <td>{{ $item->updated_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit-btn" type="button" data-toggle="modal" data-target="#myEditModal" data-id="{{ $item->id }}">Edit</button>
                                        <button class="btn btn-primary btn-sm delete-btn" type="button" data-toggle="modal" data-target="#DeleteModal" data-id="{{ $item->id }}"> Delete </button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                    <div class="modal fade" id="myEditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabelLarge">Edit Mixins</h4>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
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
                                            <input class="form-control" type="text" name="editMixinName" id="editMixinName" required>
                                            <input type="hidden" id="editMixinId">
                                        </div>

                                        <div class="form-group">
                                            <label class="col-form-label"> MixIn Qty *</label>
                                            <input class="form-control" type="number" name="editMixinQty" id="editMixinQty" required>
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
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Delete</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Delete <strong id="delMixinName"></strong> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="doDeleteBtn">Delete</button>
      </div>
    </div>
  </div>
</div>
</body>
    @include('admin.footer')

<script>
$(document).ready(function() {
    $('.edit-btn').on('click', function() {
        var mixinId = $(this).data('id');
        $.ajax({
            url: 'mixins/' + mixinId + '/edit',
            method: 'GET',
            success: function(data) {
                // Populate modal fields
                $('#editMixinName').val(data.mixiName);
                $('#editMixinQty').val(data.mixinQty);
                // Optionally, store the item ID for the update action
                $('#myEditModal').data('item-id', mixinId);
                $('#editMixinId').val(mixinId); // Set hidden field
            }
        });
    });

    // Handle update on Save changes
    $('#saveEditBtn').on('click', function() {
        var mixinId = $('#editMixinId').val(); // Correct hidden field
        var mixiName = $('#editMixinName').val(); // Correct name field
        var mixinQty = $('#editMixinQty').val();

        $.ajax({
            url: 'mixins/' + mixinId,
            method: 'PUT',
            data: {
                mixiName: mixiName,
                mixinQty: mixinQty,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $('#myEditModal').modal('hide');
                $('#successToast').toast('show');
                setTimeout(function() {
                    location.reload();
                }, 2000); // Wait for toast to show before reload
            },
            error: function(xhr) {
                alert('Update failed!');
            }
        });
    });
});
</script>

<script>
let currentDeleteId = null;

/* ---------- open confirmation ---------- */
$(document).on('click', '.delete-btn', function () {
    currentDeleteId = $(this).data('id');
    $('#delMixinName').text($(this).data('name'));
    $('#confirmDeleteModal').modal('show');
});

/* ---------- perform delete ---------- */
$(document).on('click', '#doDeleteBtn', function () {
    $.ajax({
        url: `mixins/${currentDeleteId}`,
        type: 'DELETE',
        data: { _token: '{{ csrf_token() }}' },
        success: function (res) {
            $('#confirmDeleteModal').modal('hide');
            const toast = $('#liveToast');
            toast.removeClass('bg-danger').addClass('bg-success');
            toast.find('#toastMessage').text('Mixin deleted successfully!');
            toast.toast('show');

            /* remove row from DOM */
            $(`button[data-id="${currentDeleteId}"]`).closest('tr').fadeOut(400, function () {
                $(this).remove();
            });
        },
        error: function (xhr) {
            $('#confirmDeleteModal').modal('hide');
            const toast = $('#liveToast');
            toast.removeClass('bg-success').addClass('bg-danger');
            toast.find('#toastMessage').text('Could not delete mixin');
            toast.toast('show');
        }
    });
});
</script>




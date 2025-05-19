<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>

<div class="modal fade" id="employeeShowModalDelete" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Candidates</h5>
                    <button type="button" class="close modal_delete" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('user.candidate.delete') }}" method="get">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="row">
                                <span style="color:red; font-weight:1000;">Are You Sure You Want To Delete This Data
                                    ?</span>
                                <input type="hidden" id="d-id" name="id">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary modal_delete"
                                data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                </div>
                </form>
            </div>

        </div>
    </div>
    </div>

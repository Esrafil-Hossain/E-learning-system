<!--begin::Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Course</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('course.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label"> Course Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="course_name" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Course Details</label>
                        <textarea class="form-control" id="message-text" name="course_details" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Course Price</label>
                        <input type="text" class="form-control" id="recipient-name" name="price" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Instructor Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="instructor" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Course Material</label>
                        <input type="file" class="form-control-file" id="image" name="material" required>
                    </div>
                    <div class="modal-footer">
                        <button type="close" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end: Modal-->
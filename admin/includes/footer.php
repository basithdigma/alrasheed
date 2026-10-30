                <!-- Main Content Ends Here -->
                <footer class="mt-5 text-center text-muted small pb-3">
                    &copy; <?= date("Y") ?> Al-Rasheed Aviation Services. All Rights Reserved.
                </footer>
            </div> <!-- End content-area -->
        </div> <!-- End row -->
    </div> <!-- End container-fluid -->

    <!-- jQuery (Required for Summernote) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Summernote Lite JS -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    
    <script>
        function previewImage(input, previewId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + previewId).attr('src', e.target.result).show();
                    $('#' + previewId + '-wrapper').show();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(function() {
            // Initialize Summernote
            if ($('.rich-text-editor').length > 0) {
                $('.rich-text-editor').summernote({
                    placeholder: 'Enter content here...',
                    tabsize: 2,
                    height: 300,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'italic', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });
            }
        });
    </script>
</body>
</html>

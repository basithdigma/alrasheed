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
        // Shrink large photos in the browser so uploads stay under the server's request size limit (413 error)
        function compressImage(file, maxSize, quality) {
            return new Promise(function(resolve) {
                if (!/^image\/(jpeg|png|webp)$/.test(file.type)) return resolve(file);
                var url = URL.createObjectURL(file);
                var img = new Image();
                img.onload = function() {
                    URL.revokeObjectURL(url);
                    var scale = Math.min(1, maxSize / Math.max(img.width, img.height));
                    var canvas = document.createElement('canvas');
                    canvas.width = Math.round(img.width * scale);
                    canvas.height = Math.round(img.height * scale);
                    canvas.getContext('2d').drawImage(img, 0, 0, canvas.width, canvas.height);
                    canvas.toBlob(function(blob) {
                        if (!blob || blob.size >= file.size) return resolve(file);
                        var ext = { 'image/webp': 'webp', 'image/png': 'png', 'image/jpeg': 'jpg' }[blob.type] || 'jpg';
                        resolve(new File([blob], file.name.replace(/\.[^.]+$/, '') + '.' + ext, { type: blob.type }));
                    }, 'image/webp', quality);
                };
                img.onerror = function() { URL.revokeObjectURL(url); resolve(file); };
                img.src = url;
            });
        }

        function previewImage(input, previewId) {
            if (input.files && input.files[0]) {
                var $submit = $(input).closest('form').find('[type=submit]').prop('disabled', true);
                compressImage(input.files[0], 1920, 0.82).then(function(file) {
                    if (file !== input.files[0]) {
                        var dt = new DataTransfer();
                        dt.items.add(file);
                        input.files = dt.files;
                    }
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#' + previewId).attr('src', e.target.result).show();
                        $('#' + previewId + '-wrapper').show();
                    }
                    reader.readAsDataURL(file);
                    $submit.prop('disabled', false);
                });
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
                    ],
                    callbacks: {
                        // Images pasted into the content are stored inline, so shrink them first
                        onImageUpload: function(files) {
                            var $editor = $(this);
                            Array.prototype.forEach.call(files, function(file) {
                                compressImage(file, 1200, 0.8).then(function(small) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $editor.summernote('insertImage', e.target.result);
                                    };
                                    reader.readAsDataURL(small);
                                });
                            });
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>

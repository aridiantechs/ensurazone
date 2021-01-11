var uploadedDocumentMap = {};
Dropzone.autoDiscover = false;

var myDropzoneTheFirst = new Dropzone(
    //id of drop zone element 1
    '#mydropzone', {
    url: submit_url,
    maxFiles: 4,
    maxFilesize: 12, // MB
    acceptedFiles: "image/jpg,image/jpeg,image/png",
    dictDefaultMessage: "Drop Your Files here.",
    /* autoProcessQueue: false, */
    accept: function (file, done) {
        console.log("uploaded");
        done();
    },

    renameFile: function (file) {
        let newName = new Date().getTime() + '_' + file.name;
        return newName;
    },
    addRemoveLinks: true,
    headers: {
        'X-CSRF-TOKEN': csrf
    },
    sending: function (file, xhr, formData) {
        const fileType = file.type;

    },
    success: function (file, response) {
        console.log(file);
        if (response.name !== null) {
            $('#mydropzone').append('<input type="hidden" name="document[]" value="' + response.name + '">')
            uploadedDocumentMap[file.upload.filename] = response.name
            toastr.success('file uploaded');
        }
        else {
            toastr.error('something went wrong');
        }
        console.log(uploadedDocumentMap);

    },
    removedfile: function (file) {
        file.previewElement.remove()
        $.ajax({
            type: 'get',
            url: remove_url,
            data: {
                filename: uploadedDocumentMap[file.upload.filename],
                /* _method: 'DELETE', */
            },
            success: function (data) {
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.upload.filename]
                }
                $('#mydropzone').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            error: function (e) {
                console.log(e);
            }
        });


    },
    init: function (file) {

        /* this.on('addedfile', function (file) {
            setDropzoneImgLimit(file);
        }); */

        this.on("maxfilesexceeded", function (file) {
            alert("No more files please!");
        });

    }
}
);
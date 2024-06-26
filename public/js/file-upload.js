$('.image-upload').fileinput({
    theme: 'fas',
    showUpload: false,
    previewFileType: 'any',
    language: 'pt-BR',
    browseOnZoneClick: true,
    showRemove: false,
    initialPreviewAsData: true,
    initialPreview: $('.image-upload')[0].defaultValue,
    fileActionSettings: {
        showDrag: false
    },
    showRemove: true,
    showClose: false,
    fileActionSettings: {
        showRemove: false
    },
    maxFileSize: 4096
});

$('#course_schedule_integrated').fileinput({
    theme: 'fas',
    showUpload: false,
    previewFileType: 'any',
    language: 'pt-BR',
    browseOnZoneClick: true,
    showRemove: false,
    initialPreviewAsData: true,
    initialPreview: $('#course_schedule_integrated')[0].defaultValue,
    initialPreviewConfig: [
        {type: 'pdf', size: 3072}
    ],
    fileActionSettings: {
        showDrag: false
    },
    showRemove: true,
    showClose: false,
    fileActionSettings: {
        showRemove: false
    },
    maxFileSize: 4096
});

$('#course_schedule_subsequent').fileinput({
    theme: 'fas',
    showUpload: false,
    previewFileType: 'any',
    language: 'pt-BR',
    browseOnZoneClick: true,
    showRemove: true,
    initialPreviewAsData: true,
    initialPreview: $('#course_schedule_subsequent')[0].defaultValue,
    initialPreviewConfig: [
        {type: 'pdf', size: 3072}
    ],
    fileActionSettings: {
        showDrag: false
    },
    showRemove: true,
    showClose: false,
    fileActionSettings: {
        showRemove: false
    },
    maxFileSize: 4096
});


$('#link_image').fileinput({
    theme: 'fas',
    showUpload: false,
    previewFileType: 'any',
    language: 'pt-BR',
    browseOnZoneClick: true,
    showRemove: true,
    initialPreviewAsData: true,
    initialPreview: $('#link_image')[0].defaultValue,
    fileActionSettings: {
        showDrag: false
    },
    showRemove: true,
    showClose: false,
    fileActionSettings: {
        showRemove: false
    },
    maxFileSize: 4096
});


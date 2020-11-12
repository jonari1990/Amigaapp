$(document).ready(function() {
    $("#input-b6,#input-b7,#input-b8,#input-b9,#input-b10,#input-b11").fileinput({
        language:'es',
        theme:"fa",
        maxFileSize: 2500,
        showUpload: false,
        dropZoneEnabled: false,
        maxFileCount: 10,
        mainClass: "input-group-lg",
        allowedFileExtensions: ["jpg"]
    });
});
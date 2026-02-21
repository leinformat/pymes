(() => {
    // Allowed file extensions (removed duplicated xlsx)
    const allowedTypes = ['docx','doc','xlsx','xls','pptx','ppt','pdf','txt'];

    // Counters per type
    let typeCounters = new Array(allowedTypes.length).fill(0);

    const $alert = $('div.alert');
    const $fileInput = $('#file-es');

    const resetCounters = () => {
        typeCounters.fill(0);
    };

    const countFileType = (filename) => {
        const ext = filename.split('.').pop().toLowerCase();
        const index = allowedTypes.indexOf(ext);
        if (index !== -1) typeCounters[index]++;
    };

    // Initialize fileinput
    $fileInput.fileinput({
        language: 'es',
        uploadUrl: './services/uploadFiles.php',
        uploadAsync: false,
        maxFileCount: 10,
        maxFileSize: 10240,
        removeFromPreviewOnError: true,
        allowedFileExtensions: allowedTypes
    });

    // Clear event
    $fileInput.on('filecleared', () => {
        $alert.empty().hide();
    });

    // Upload success event
    $fileInput.on('filebatchuploadsuccess', (event, data) => {
        const { files, response, filescount: total } = data;

        resetCounters();

        let message = `
            <p>${total} files uploaded to directory: ${response.dirupload}</p>
            <br>
            <p>Processed files:</p>
            <ul>
        `;

        files.forEach(file => {
            if (!file) return;

            const sizeKB = Math.ceil(file.size / 1024);

            message += `<li>${file.name} (${sizeKB} KB)</li>`;
            countFileType(file.name);
        });

        message += '</ul><br>';

        const typeSummary = allowedTypes
            .map((type, i) => `(${typeCounters[i]}) ${type}`)
            .join(', ');

        message += `<p>${typeSummary}</p>`;

        message += (response.total === total)
            ? `<p>File count matches the total processed on the server.</p>`
            : `<p>Mismatch between uploaded files and server processed files.</p>`;

        $alert.html(message).show();

    });
    // Hide alert initially
    $alert.hide();
})();
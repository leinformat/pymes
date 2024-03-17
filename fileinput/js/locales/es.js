/*!
 * FileInput Spanish Translations
 *
 * This file must be loaded after 'fileinput.js'. Patterns in braces '{}', or
 * any HTML markup tags in the messages must not be converted or translated.
 *
 * @see http://github.com/kartik-v/bootstrap-fileinput
 *
 * NOTE: this file must be saved in UTF-8 encoding.
 */
(function ($) {
    "use strict";

    $.fn.fileinputLocales['es'] = {
        fileSingle: 'archivo',
        filePlural: 'archivos',
        browseLabel: 'Examinar &hellip;',
        removeLabel: 'Quitar',
        removeTitle: 'Quitar archivos seleccionados',
        cancelLabel: 'Cancelar',
        cancelTitle: 'Abortar la subida en curso',
        uploadLabel: 'Subir archivo',
        uploadTitle: 'Subir archivos seleccionados',
        msgNo: 'No',
        msgNoFilesSelected: '',
        msgCancelled: 'Cancelado',
        msgZoomModalHeading: 'Vista previa detallada',
        msgSizeTooLarge: 'Archivo "{name}" (<b>{size} KB</b>) excede el tamaño maximo permitido de <b>{maxSize} KB</b>.',
        msgFilesTooLess: 'Debe seleccionar al menos <b>{n}</b> {files} a cargar.',
        msgFilesTooMany: 'El número de archivos seleccionados a cargar <b>({n})</b> excede el límite maximo permitido de <b>{m}</b>.',
        msgFileNotFound: 'Archivo "{name}" no encontrado.',
        msgFileSecured: 'No es posible acceder al archivo "{name}" porque estara siendo usado por otra aplicacion o no tengamos permisos de lectura.',
        msgFileNotReadable: 'No es posible acceder al archivo "{name}".',
        msgFilePreviewAborted: 'Previsualizacion del archivo "{name}" cancelada.',
        msgFilePreviewError: 'Ocurrio un error mientras se leía el archivo "{name}".',
        msgInvalidFileType: 'Tipo de archivo no valido para "{name}". Solo archivos "{types}" son permitidos.',
        msgInvalidFileExtension: 'Extension de archivo no valido para "{name}". Solo archivos "{extensions}" son permitidos.',
        msgUploadAborted: 'La carga de archivos se ha cancelado',
        msgUploadThreshold: 'Processing...',
        msgValidationError: 'Error de validacion',
        msgLoading: 'Subiendo archivo {index} de {files} &hellip;',
        msgProgress: 'Subiendo archivo {index} de {files} - {name} - {percent}% completado.',
        msgSelected: '{n} {files} seleccionado(s)',
        msgFoldersNotAllowed: 'Arrastre y suelte unicamente archivos. Omitida(s) {n} carpeta(s).',
        msgImageWidthSmall: 'El ancho de la imagen "{name}" debe ser al menos {size} px.',
        msgImageHeightSmall: 'La altura de la imagen "{name}" debe ser al menos {size} px.',
        msgImageWidthLarge: 'El ancho de la imagen "{name}" no puede exceder de {size} px.',
        msgImageHeightLarge: 'La altura de la imagen "{name}" no puede exceder de {size} px.',
        msgImageResizeError: 'No se pudo obtener las dimensiones de imagen para cambiar el tamaño.',
        msgImageResizeException: 'Error al cambiar el tamaño de la imagen.<pre>{errors}</pre>',
        dropZoneTitle: 'Arrastre y suelte aqui los archivos &hellip;',
        dropZoneClickTitle: '<br>(o haga click para seleccionar {files})',
        fileActionSettings: {
            removeTitle: 'Eliminar archivo',
            uploadTitle: 'Subir archivo',
            zoomTitle: 'Ver detalles',
            dragTitle: 'Mover / Arreglar de nuevo',
            indicatorNewTitle: 'No subido todavia',
            indicatorSuccessTitle: 'Subido',
            indicatorErrorTitle: 'Subir Error',
            indicatorLoadingTitle: 'Subiendo ...'
        },
        previewZoomButtonTitles: {
            prev: 'Ver archivo anterior',
            next: 'Ver archivo siguiente',
            toggleheader: 'Activar encabezado',
            fullscreen: 'Activar pantalla completa',
            borderless: 'Activar el modo sin bordes',
            close: 'Cerrar vista detallada'
        }
    };
})(window.jQuery);

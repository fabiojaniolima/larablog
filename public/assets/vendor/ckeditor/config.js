/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
        config.language = 'pt-br';
        config.removePlugins = 'save,print';
        config.entities = false;
        config.htmlEncodeOutput = false;
        config.removeButtons = 'Copy,Cut,Paste,SelectAll,Styles,CreateDiv';
        config.height = 300;
        config.toolbarGroups = [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
            { name: 'links' },
            { name: 'insert' },
            { name: 'tools' },
            '/',
            { name: 'colors' },
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'styles' },
        ];
	config.wordcount = {
            // Se você quer ou não mostrar a contagem de parágrafos
            showParagraphs: true,

            // Se você deseja ou não mostrar a Contagem de palavras
            showWordCount: true,

            // Se você deseja ou não mostrar a Contagem de caracteres
            showCharCount: true,

            // Se você quer ou não conta Espaços como Chars
            countSpacesAsChars: false,

            // Se deve ou não incluir caracteres Html na Contagem de caracteres
            countHTML: false,

            // Contagem de palavras máxima permitida, -1 é padrão para ilimitado
            maxWordCount: -1,

            // Contagem de caracteres Máxima permitida, -1 é o padrão para ilimitado
            maxCharCount: -1,

            // Adicionar filtro para adicionar ou remover elementos antes da contagem (consulte CKEDITOR.htmlParser.filter), Valor padrão: null (sem filtro)
            filter: new CKEDITOR.htmlParser.filter({
                elements: {
                    div: function( element ) {
                        if(element.attributes.class == 'mediaembed') {
                            return false;
                        }
                    }
                }
            })
        };
};
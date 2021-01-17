$(document).ready(function() {
        var $validator = $("#wizardForm").validate({
        rules: {
            cnpj: {
                required: false
            },
            nome: {
                required: false
		    },
		    logradouro: {
                required: false
		    },
		    cep: {
                required: false
		    },
		    complemento: {
                required: false
		    },
		    bairro: {
                required: false
		    },
		    nomeProduto: {
                required: false
            },
		    classificacao: {
                required: false
		    },
		    anti: {
                required: false
		    },
		    anti1: {
                required: false
            },
            anti2: {
                required: false
            },
            anti3: {
                required: false
            },
            anti4: {
                required: false
            },
            anti5: {
                required: false
            },
            anti6: {
                required: false
            },
		    exampleInputExpiration: {
                required: false,
                date: false
            },
		    exampleInputCsv: {
                required: false,
                number: false
            }
        }
    });
 
    
    
    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
});
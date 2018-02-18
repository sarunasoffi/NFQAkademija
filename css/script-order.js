$('document').ready(function()
{
	$('#phone').on('select keydown contextmenu click drop', function(e){
    if((e.keyCode == 37 && (this.selectionStart == 3 || e.ctrlKey)) || (e.keyCode == 36) ||
       (e.keyCode == 8 && this.value.length == 3) || e.type == 'drop') {
        e.preventDefault();
    }
    if(this.selectionStart == 0 &&
       this.selectionStart != this.selectionEnd) {
        this.setSelectionRange(3, this.selectionEnd);
    }
	}); 
	 $("#order-form").validate({ /* VALIDACIJA */
      rules:{
			firstName: {
		    required: true,
			minlength: 3,
			maxlength: 25
			},
			placeOfAction: {
			required: true,
			minlength: 5,
			maxlength: 60
			},
			phone_number: {
			number: true,
			required: true,
			minlength: 11,
			maxlength: 11
			},
			order_name: {
			required: true
			},
	   },
       messages:
	   {
            firstName:{ 
            	required: "Prašome įvesti savo vardą",
            	minlength: "Vardas neturi būti trumpesnis nei 3 raidės",
            	maxlength: "Vardas negali viršyti 25 simbolių"
            },
            placeOfAction:{ 
            	required: "Prašome pasirinkti paslaugos atlikimo vietą",
            	minlength: "Vietos aprašymas neturi būti trumpesnis nei 5 simboliai",
            	maxlength: "Vietos aprašymas neturi viršyti 60 simbolių"
            },
            phone_number:{
                required: "Prašome įvesti savo mobiliojo telefono numerį",
                minlength: "Telefono numeris turi susidaryti iš 11 skaitmenų",
                number: "Telefono numeris turi susidaryti tik iš skaitmenų",
                maxlength: "Telefono numeris negali viršyti 11 skaitmenų"
            },
       },
		errorElement : 'span',
		errorClass: 'errMsg'
	});
});	/* VALIDACIJA END */

<script>

	document.addEventListener('DOMContentLoaded', function() {
		$('.tblscroll').niceScroll({
			cursoscolor: "#515365",
			cursorwidth: "30px",
			background: "rgba(20,20,20,0.3)",
			cursorborder: "0px",
			cursorborderradius:3

		})

	})



	function Confirm(id, eventName, text)
	{
		swal({
			title: 'CONFIRMAR',
			text: text,
			type: 'warning',
			showCancelButton: true,
			cancelButtonText: 'Cerrar',
			cancelButtonColor: '#fff',
			confirmButtonColor: '#3B3F5C',
			confirmButtonText: 'Aceptar'
		}).then(function(result) {
			if(result.value){
				window.livewire.emit(eventName, id)
				swal.close()
			}

		})
	}


	function doAction()
	{
		swal({
			title: '',
			text: '¿QUIERES REGISTRAR EL PRODUCTO?',
			type: 'warning',
			showCancelButton: true,
			cancelButtonText: 'NO',
			cancelButtonColor: '#fff',
			confirmButtonColor: '#3B3F5C',
			confirmButtonText: 'SI'
		}).then(function(result) {
			if(result.value){
               //$('#theModal').modal('show')
               window.location = '/products'
                swal.close()
            }

        })
	}

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>

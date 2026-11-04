$(document).on('click','.productosForm', function(e){
    e.preventDefault();
    $.ajax({
        url:'/productos',
        method: 'POST',
        data:form,
        headers:{
            'X-CSRF-TOKEN':$(meta[name="csrf-token"]).attr('')
        }
        })
})
const invoices = document.getElementById("invoices");

if(invoices){
    invoices.addEventListener('click',(e)=>{
        if(e.target.className === 'btn btn-danger delete-invoice'){
            if(confirm('Are you sure?')){
                const id = e.target.getAttribute('data-id');

                fetch(`/invoice/delete/${id}`,{
                    method:'DELETE'
                }).then(res => window.location.reload());
            }
        }
    });
}




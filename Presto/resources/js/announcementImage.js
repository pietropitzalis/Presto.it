document.addEventListener('DOMContentLoader'), function(){
    if (document.querySelectorAll('#drophere').length>0){
        let csrfToken= $('meta[name="csrf-token"]').attr('content');
        let uniqueSecret= $('input[name="uniqueSecret"]').attr('value');
        let myDropzone= new window.Dropzone('#drophere', {
            url:'/announcements/images/upload',
            params:{
                _token:csrfToken,
                uniqueSecret:uniqueSecret,
            }

        });
    }
    

}
$(function(){
    if($('#drophere').length>0){
        alert('fbssdge');
    }
    
})
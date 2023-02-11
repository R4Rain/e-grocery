document.addEventListener("DOMContentLoaded", () => {
    document.getElementById('input-register-image').addEventListener("change", function(){
        const file = this.files[0];
        const type = file.type.split("/")[0];
        if(file && type == 'image'){
            let reader = new FileReader();
            reader.onload = function(event){
                document.getElementById('default-image').hidden = true;
                document.getElementById('preview-image').src = event.target.result;
                document.getElementById('preview-image').hidden = false;
            };
            reader.readAsDataURL(file);
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById('input-profile-image').addEventListener("change", function(){
        const file = this.files[0];
        const type = file.type.split("/")[0];
        console.log(type);
        if(file && type == 'image'){
            let reader = new FileReader();
            reader.onload = function(event){
                document.getElementById('display-picture-image').src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
});
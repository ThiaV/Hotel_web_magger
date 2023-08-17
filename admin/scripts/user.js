
let general_data, contacts;
let user_picture_inp = document.getElementById('user_picture_inp');

let user_s_form = document.getElementById('user_s_form');


user_s_form.addEventListener('submit',function(e){
    e.preventDefault();
    add_image();
})

function add_image(){
    
    let data = new FormData();

    data.append('picture',user_picture_inp.files[0]);
    data.append('add_image','');
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/user_crus.php", true);
    
    xhr.onload = function(){

        var myModalEl = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModalEl); // Returns a Bootstrap modal instance

        modal.hide();
        
        if(this.responseText == 'inv_img'){
            alert('Thanh Cong', 'Da thay doi');
            get_general();
        }
        else if(this.responseText == 'inv_size'){
            alert('error','Ảnh đã vượt qua lưu lượng cho phép');

        }
        else if(this.responseText == 'upd_failed'){
            alert('error','Ảnh đã');

        }

        else{
            alert('Thành công','Lưu thành công');
            user_picture_inp.value = '';
            get_user();
        }
       
    }
    xhr.send(data);




}

function get_user(){


    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');

    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');


    let shutdown_toggle = document.getElementById('shutdown-toggle');

    let member_name_inp = document.getElementById('member_name_inp');

    let user_picture_inp = document.getElementById('user_picture_inp');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crus.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onload = function(){
        general_data = JSON.parse(this.responseText);
        //     console.log(general_data); // in giá trị của general_data vào console
        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;   
       
        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;
    
    
        if(general_data.shutdown_toggle == 0){
            shutdown_toggle.checked = false;
            shutdown_toggle.value = 0;
        }
        else{
            shutdown_toggle.checked = true;
            shutdown_toggle.value = 1;
        }
    }

    xhr.send('get_user');
}

function rem_image(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/user_crus.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      if(this.responseText ==1){
        alert('Thành Công', 'Xóa ảnh');
        get_user();
      }  
      else{
        alert('Thất bại','Không xóa được');

      }
    }
    xhr.send('rem_image='+val);
}

window.onload = function(){
    get_user();

}


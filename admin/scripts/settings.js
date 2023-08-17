
let general_data, contacts;



let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

let contacts_s_form = document.getElementById('contacts_s_form');
let team_s_form = document.getElementById('team_s_form');

// function get_general(){
    let site_title = document.getElementById("site_title");
    let site_about = document.getElementById("site_about");

//     let site_title_inp = document.getElementById("site_title_inp");
//     let site_about_inp = document.getElementById("site_about_inp");


//     let shutdown_toggle = document.getElementById("shutdown-toggle");

//     let member_name_inp = document.getElementById("member_name_inp");

//     let member_picture_inp = document.getElementById("member_picture_inp");

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crus.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    // Phần này ở trong file settigns.js

  
    
    // Phần này ở trong file settigns.js

    // xhr.onload = function() {
    //     if (xhr.status === 200) {
    //     const response = xhr.responseText;
    //     if (response) { // Kiểm tra xem chuỗi có tồn tại không trước khi phân tích
    //     const data = JSON.parse(response);
    //   // Tiếp tục xử lý dữ liệu...
    //     } else {
    //     console.error('Response string is empty.');
    //     }
    // } else {
    //     console.error('Request failed. Status:', xhr.status);
    // }
    // };

    // Phần này ở trong file settigns.js

    // xhr.onload = function() {
    // if (xhr.status === 200) {
    //     const response = xhr.responseText;
    //     console.log('Response string:', response); // Đặt điểm dừng để kiểm tra
    //     if (response) {
    //     const data = JSON.parse(response);
    //   // Tiếp tục xử lý dữ liệu...
    //     } else {
    //     console.error('Response string is empty.');
    //     }
    // } else {
    //     console.error('Request failed. Status:', xhr.status);
    // }
    // };


    // xhr.onload = function() {

    //     if (xhr.status === 200) {
    //       const response = xhr.responseText;
    //       console.log('Response string:', response); // Đặt điểm dừng để kiểm tra
    //       try {
    //         if (response) {
    //           const data = JSON.parse(response);
    //           site_title.innerText = data.site_title;
    //           site_about.innerText = data.site_about;   
             
    //           site_title_inp.value = data.site_title;
    //           site_about_inp.value = data.site_about;
    //           // Tiếp tục xử lý dữ liệu...
    //         } else {
    //           console.error('Response string is empty.');
    //         }
    //       } catch (error) {
           
    //       }
    //     } else {
    //       console.error('Request failed. Status:', xhr.status);
    //     }
    //   };
      

    xhr.onload = function() {
        if (xhr.status === 200) {
          const response = xhr.responseText;
          console.log('Response string:', response); // Debug: Xuất chuỗi JSON để kiểm tra định dạng
          try {
            const data = JSON.parse(response);
             // Debug: Xuất đối tượng Javascript nhận được
            // Xử lý dữ liệu nhận được...
          } catch (error) {
            console.log('Error parsing JSON:', error);
          }
        } else {
          console.error('Request failed. Status:', xhr.status);
        }
      };
      




    // xhr.onload = function(){
//         general_data = JSON.parse(this.responseText);
//         //     console.log(general_data); // in giá trị của general_data vào console
//         site_title.innerText = general_data.site_title;
//         site_about.innerText = general_data.site_about;   
       
//         site_title_inp.value = general_data.site_title;
//         site_about_inp.value = general_data.site_about;
    
    
//         if(general_data.shutdown_toggle == 0){
//             shutdown_toggle.checked = false;
//             shutdown_toggle.value = 0;
//         }
//         else{
//             shutdown_toggle.checked = true;
//             shutdown_toggle.value = 1;
//         }
    // }

   xhr.send('');
// }


// general_s_form.addEventListener('submit',function(e){
//     e.preventDefault();
//     upd_general(site_title_inp.value, site_about_inp.value);
// }
// )

// function upd_general(site_title_val, site_about_val){
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/setting_crus.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
//     xhr.onload = function(){

//         var myModalEl = document.getElementById('general-s');
//         var modal = bootstrap.Modal.getInstance(myModalEl); // Returns a Bootstrap modal instance

//         modal.hide();
        
//         if(this.responseText == 1){
//             alert('Thanh Cong', 'Da thay doi');
//             get_general();
//         }
//         else{
//             alert('error','Khong the thay duoc');
//         }
       
//     }
//     xhr.send('site_title = '+site_title_val + '&site_about'+ site_about_val+'&upd_general');

// }


// function upd_shutdown(value){
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/setting_crus.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
//     xhr.onload = function(){

      
//         if(this.responseText == 1 && general_data.shutdown==0){
//             alert('Thanh Cong', 'Đã Bật', 'shutdown');
//         }
//         else{
//             alert('Thành Công','Đã tắt','shutdown');
//         }                    
//         get_general();

       
//     }
//     xhr.send('upd_shutdown='+value);
// }

// function get_contacts(){

//     let contacts_p_id = ['address','gmap','ph1','ph2','email','fb','tw','insta'];

//     let iframe = document.getElementById('iframe');

//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/setting_crus.php", true);
//     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
//     xhr.onload = function(){
//         contacts= JSON.parse(this.responseText);
//         contacts = Object.values(contacts);

        
//         for(i=0;i<contacts_p_id.length;i++){
//             document.getElementById(contacts_p_id[i]).innerText = contacts[i+1];

//         }
//         iframe.src = contacts[9];
        

//     }

//     xhr.send('get_contacts');
// }



// team_s_form.addEventListener('submit',function(e){
//     e.preventDefault();
//     add_member();
// })

// function add_member(){
    
//     let data = new FormData();

//     data.append('name', member_name_inp.value);
//     data.append('picture',member_picture_inp.files[0]);
//     data.append('add_member','');
//     let xhr = new XMLHttpRequest();
//     xhr.open("POST", "ajax/setting_crus.php", true);
    
//     xhr.onload = function(){

//         var myModalEl = document.getElementById('general-s');
//         var modal = bootstrap.Modal.getInstance(myModalEl); // Returns a Bootstrap modal instance

//         modal.hide();
        
//         if(this.responseText == 1){
//             alert('Thanh Cong', 'Da thay doi');
//             get_general();
//         }
//         else{
//             alert('error','Khong the thay duoc');
//         }
       
//     }
//     xhr.send(data);




// }

// window.onload = function(){
//     get_general();
//     // get_contacts();

// }


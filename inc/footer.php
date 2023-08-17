<div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
            
            <h3 class="h-font fw-bold fs-3 mb-2">CRT</h3>
            <p>
                Với giá cả hợp lý và tiện lợi, khách sạn đơn giản là một lựa chọn phù hợp<br> 
                cho các khách hàng muốn tiết kiệm chi phí cho chuyến đi của mình hoặc đơn giản<br>
                là muốn nghỉ ngơi và tìm hiểu các địa điểm du lịch một cách dễ dàng.
            </p>
            </div>
            <div class="justify-content-between col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">Trang chủ</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Phòng</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Liên Hệ</a><br>
            <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Tin Tức</a>

            </div>
            <div class="col-lg-4 p-4">
            <h5 class="mb-3">Theo dõi</h5>
            <a href="" class="d-inline-block text-dark text-decoration-none mb-2">
                <i class="bi bi-twitter me-1"></i>
                Twitter
               
            </a>
            <br>
            <a href="" class="d-inline-block text-dark text-decoration-none mb-2 ">
            <i class="bi bi-facebook"></i>
                Facebook   
            </a>
            <br>
            <a href="" class="d-inline-block text-dark text-decoration-none">
                <i class="bi bi-instagram me-1"></i>
                Instagram
               
            </a>
        
            
            </div>
        </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0">Thia</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    

<script>
    function setActive(){
        let navbar = document.getElementById('navbar');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0; i<a_tags.length;i++){
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.href.indexOf(file_name)>=0){
                a_tags[i].classList.add('active')
            }
        }
    }
    setActive();
</script>